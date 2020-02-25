<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyelia extends CI_Controller {

	public function index()
	{
		$this->load->view('penyelia/masuk_penyelia');
	}
	public function login(){
		$data = $this->db->query("select * from tbl_karyawan where jabatan = 'penyelia' and email ='".$this->input->post('email')."'")->result();

		if(empty($data)){
			$sess_array = array (
				'status' => '2' ,
			);
			$this->session->set_userdata('status',$sess_array);
			redirect('Penyelia');
		}else{
			foreach ($data as $a) {
				if($this->encryption->decrypt($a->password) == $this->input->post('password') ){
					$sess_array = array (
						'id' => $a->id ,
						'jabatan' => $a->jabatan
					);
					$this->session->set_userdata('user',$sess_array);
					redirect('Penyelia/home');	
				}else{
					$sess_array = array (
						'status' => '2' ,
					);
					$this->session->set_userdata('status',$sess_array);
					redirect('Penyelia');
				}
			}
		}
		
	}

	public function home(){
		$data['uji'] = $this->db->query("SELECT
			tbl_uji.faktur
			, tbl_uji.id_pelanggan
			, tbl_pelanggan.nama
			, tbl_pelanggan.nope
			, tbl_pelanggan.alamat
			, tbl_pelanggan.nama_perusahaan
			, tbl_pelanggan.email
			, tbl_uji.id_uji
			, tbl_harga_uji.item_uji
			, tbl_harga_uji.harga
			, tbl_harga_uji.keterangan
			, tbl_harga_uji.kategori
			, tbl_uji.jenis_uji
			, tbl_uji.tanggal_uji
			, tbl_uji.bukti_bayar
			, tbl_uji.hasil_uji
			, tbl_uji.status_uji
			, tbl_uji.teknisi
			FROM
			tbl_harga_uji
			INNER JOIN tbl_uji 
			ON (tbl_harga_uji.id = tbl_uji.id_uji)
			INNER JOIN tbl_pelanggan 
			ON (tbl_pelanggan.id = tbl_uji.id_pelanggan) where status_periksa = 'penyelia';")->result();

		$data['teknisi'] = $this->db->query("select * from tbl_karyawan where jabatan = 'Teknisi';")->result();
		$this->load->view('penyelia/header_penyelia');
		$this->load->view('penyelia/home_penyelia',$data);
		$this->load->view('footer');
	}

	public function pilih_teknisi(){
		$data = array(
			'teknisi' => $this->input->post('teknisi') ,

		);
		$time = array(
			'faktur' => $this->input->post('faktur'),
			'status' => 'Memulai Proses Uji'
		);

		$this->db->insert('tbl_timeline', $time);


		if($this->db->update('tbl_uji', $data, array('faktur' => $this->input->post('faktur')))){
			redirect('Penyelia/home');
		}
	}

	public function konfirmasi($id){
		$data = array(
			'status_periksa' => 'keplab' ,

		);

		$time = array(
			'faktur' => $id,
			'status' => 'Menunggu Persetujuan Kepala Lab' 
		);
		$this->db->insert('tbl_timeline', $time);

		if($this->db->update('tbl_uji', $data, array('faktur' => $id))){
			redirect('Penyelia/home');
		}
	}

	
	public function keluar()
	{
		$this->session->unset_userdata('user');
		redirect('Penyelia'); 
	}

	public function jadwal(){
		$data['jadwal'] = $this->db->query("select * from tbl_jadwal where kuota > 0;")->result();
		$this->load->view('penyelia/header_penyelia');
		$this->load->view('penyelia/jadwal_penyelia',$data);
		// $this->load->view('footer');
	}

	public function hapus_Jadwal($id){
		if($this->db->delete('tbl_jadwal',array('id'=>$id))){
			redirect('Penyelia/jadwal'); 
		}
	}

	public function tambah_jadwal(){
		$data = array(
			'tanggal' => date_format(date_create($this->input->post('tanggal')),"Y-m-d"),
			'kuota' => $this->input->post('kuota'),

		);

		if($this->db->insert('tbl_jadwal', $data)){
			redirect('Penyelia/jadwal');
		}
	}

	public function upload_hasil()
	{
		$config['upload_path']   = FCPATH.'/hasil/';
		$config['allowed_types'] = 'gif|jpg|png|ico|jpeg|pdf|doc|docx';
		$config['file_name']     = chr(rand(65,90)).rand(10,100).rand(100,10000).chr(rand(65,90));
		$config['max_size']             = 500;
		$config['create_thumb']= FALSE;
		$config['maintain_ratio']= FALSE;
		$config['quality']= '50%';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('bukti'))
		{
			echo 'File terlalu besar ukurannya, silahkan upload ulang. <a href="'.base_url().'Penyelia/home" >Klik disini</a> untuk upload ulang';
		}
		else
		{
			$data = array(
				'hasil_uji' => base_url().'hasil/'.$this->upload->data('file_name')
			);
			

			if($this->db->update('tbl_uji', $data, array('faktur' => $this->input->post('faktur')))){
				redirect('Penyelia/home');
			}

		}
	}
	
}
