<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KepalaLab extends CI_Controller {

	
	public function index()
	{
		$this->load->view('keplab/masuk_keplab');
	}
	public function login(){
			$data = $this->db->query("select * from tbl_karyawan where jabatan = 'kepala Lab' and email ='".$this->input->post('email')."'")->result();

			if(empty($data)){
				$sess_array = array (
					'status' => '2' ,
				);
				$this->session->set_userdata('status',$sess_array);
				redirect('KepalaLab');
			}else{
				foreach ($data as $a) {
					if($this->encryption->decrypt($a->password) == $this->input->post('password') ){
						$sess_array = array (
							'id' => $a->id ,
							'jabatan' => $a->jabatan
						);
						$this->session->set_userdata('user',$sess_array);
						redirect('KepalaLab/home');	
					}else{
						$sess_array = array (
							'status' => '2' ,
						);
						$this->session->set_userdata('status',$sess_array);
						redirect('KepalaLab');
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
			ON (tbl_pelanggan.id = tbl_uji.id_pelanggan) where status_periksa = 'keplab';")->result();

		$data['teknisi'] = $this->db->query("select * from tbl_karyawan where jabatan = 'Teknisi';")->result();
		$this->load->view('keplab/header_keplab');
		$this->load->view('keplab/home_keplab',$data);
		$this->load->view('footer');
	}

	
	public function konfirmasi($id){
		$data = array(
			'status_periksa' => 'done' ,
			'status_uji' => 'verified'

		);
		$time = array(
			'faktur' => $id,
			'status' => 'Uji Selesai, Silahkan Download Hasilnya' 
		);
		$this->db->insert('tbl_timeline', $time);
		

		if($this->db->update('tbl_uji', $data, array('faktur' => $id))){
           redirect('KepalaLab/home');
		}
	}

	public function tolak($id){
		$data = array(
			'status_periksa' => 'penyelia' ,
			'status_uji' => 'waiting'

		);
		$time = array(
			'faktur' => $id,
			'status' => 'Perbaikan Penyelia' 
		);
		$this->db->insert('tbl_timeline', $time);
		

		if($this->db->update('tbl_uji', $data, array('faktur' => $id))){
           redirect('KepalaLab/home');
		}
	}

	public function keluar()
	{
		$this->session->unset_userdata('user');
		redirect('KepalaLab'); 
	}

	public function riwayat(){
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
			FROM
			tbl_harga_uji
			INNER JOIN tbl_uji 
			ON (tbl_harga_uji.id = tbl_uji.id_uji)
			INNER JOIN tbl_pelanggan 
			ON (tbl_pelanggan.id = tbl_uji.id_pelanggan) where status_periksa = 'done';")->result();
		$this->load->view('keplab/header_keplab');
		$this->load->view('keplab/riwayat_keplab',$data);
		$this->load->view('footer');
	}

	public function grafik()
	{
		$ambil = $this->db->query("SELECT DISTINCT id_uji FROM tbl_uji;")->result();
		$id_uj = array();
		$jumlah = array();
		foreach ($ambil as $amb) {
			$hitung = $this->db->query("SELECT * FROM tbl_uji where id_uji = '".$amb->id_uji."';")->num_rows();
			array_push($id_uj,$amb->id_uji);
			array_push($jumlah,$hitung);
		}
		$data['uji'] = $id_uj;
		$data['jumlah'] = $jumlah;
		// print_r($id_uj);
		$this->load->view('keplab/header_keplab');
		$this->load->view('keplab/grafik_uji',$data);
	}

	public function FilterUji()
	{
		
		$ambil = $this->db->query("SELECT DISTINCT id_uji FROM tbl_uji where tanggal_uji >= '".date_format(date_create($this->input->post('tanggal_mulai')),"Y-m-d")."' and tanggal_uji <= '".date_format(date_create($this->input->post('tanggal_selesai')),"Y-m-d")."';")->result();
		$id_uj = array();
		$jumlah = array();
		foreach ($ambil as $amb) {
			$hitung = $this->db->query("SELECT * FROM tbl_uji where id_uji = '".$amb->id_uji."';")->num_rows();
			array_push($id_uj,$amb->id_uji);
			array_push($jumlah,$hitung);
		}
		$data['uji'] = $id_uj;
		$data['jumlah'] = $jumlah;
		// print_r($id_uj);
		$this->load->view('keplab/header_keplab');
		$this->load->view('keplab/grafik_uji',$data);
	}
}
