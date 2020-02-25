<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTeknisi extends CI_Controller {

	

	public function index()
	{
		$this->load->view('teknisi/masuk_mteknisi');
	}
	public function login(){
		$data = $this->db->query("select * from tbl_karyawan where jabatan = 'Teknisi' and email ='".$this->input->post('email')."'")->result();

		if(empty($data)){
			$sess_array = array (
				'status' => '2' ,
			);
			$this->session->set_userdata('status',$sess_array);
			redirect('MTeknisi');
		}else{
			foreach ($data as $a) {
				if($this->encryption->decrypt($a->password) == $this->input->post('password') ){
					$sess_array = array (
						'id' => $a->id ,
						'jabatan' => $a->jabatan
					);
					$this->session->set_userdata('user',$sess_array);
					redirect('mawal');	
				}else{
					$sess_array = array (
						'status' => '2' ,
					);
					$this->session->set_userdata('status',$sess_array);
					redirect('MTeknisi');
				}
			}
		}
		
	}

	public function awal(){
		$user = $this->session->userdata('user');
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
			,tbl_uji.jenis_bayar
			FROM
			tbl_harga_uji
			INNER JOIN tbl_uji 
			ON (tbl_harga_uji.id = tbl_uji.id_uji)
			INNER JOIN tbl_pelanggan 
			ON (tbl_pelanggan.id = tbl_uji.id_pelanggan) where status_uji = 'process' and teknisi = '".$user['id']."';")->result();
		$this->load->view('teknisi/header_mteknisi');
		$this->load->view('teknisi/home_mteknisi',$data);
		$this->load->view('footer');
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
			echo 'File terlalu besar ukurannya, silahkan upload ulang. <a href="'.base_url().'MTeknisi/awal" >Klik disini</a> untuk upload ulang';
		}
		else
		{
			$data = array(
				'hasil_uji' => base_url().'hasil/'.$this->upload->data('file_name'),
				'status_uji' => 'waiting',
				'status_periksa' => 'penyelia'

			);

			$time = array(
				'faktur' => $this->input->post('faktur'),
				'status' => 'menunggu konfirmasi Penyelia'
			);

			$this->db->insert('tbl_timeline', $time);
			
			if($this->db->update('tbl_uji', $data, array('faktur' => $this->input->post('faktur')))){
				redirect('MTeknisi/awal');
			}

		}
	}

	public function keluar()
	{
		$this->session->unset_userdata('user');
		redirect('MTeknisi'); 
	}
}
