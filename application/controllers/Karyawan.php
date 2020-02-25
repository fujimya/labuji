<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function create_captcha(){
		$this->load->helper('captcha');
		$option = array(
			'word'          => chr(rand(65,90)).chr(rand(65,90)).rand(100,10000).chr(rand(65,90)),
			'img_path'      => './captcha/',
			'img_url'       => 'http://localhost/lab/captcha/',
			'font_path'     => './path/to/fonts/texb.ttf',
			'img_width'     => '150',
			'img_height'    => 30,
			'expiration'    => 7200,
			'word_length'   => 8,
			'font_size'     => 16,
			'img_id'        => 'Imageid',
			'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
		);
		$cap = create_captcha($option);
		$image = $cap['image'];
		$this->session->set_userdata('captchaword',$cap['word']);

		return $image;
	}

	public function index()
	{
		$this->load->view('kasir/masuk_karyawan');
	}

	public function login(){
		$data = $this->db->query("select * from tbl_karyawan where jabatan = 'kasir' and email ='".$this->input->post('email')."'")->result();

		if(empty($data)){
			$sess_array = array (
				'status' => '2' ,
			);
			$this->session->set_userdata('status',$sess_array);
			redirect('Karyawan');
		}else{
			foreach ($data as $a) {
				if($this->encryption->decrypt($a->password) == $this->input->post('password') ){
					$sess_array = array (
						'id' => $a->id ,
						'jabatan' => $a->jabatan
					);
					$this->session->set_userdata('user',$sess_array);
					redirect('utama');	
				}else{
					$sess_array = array (
						'status' => '2' ,
					);
					$this->session->set_userdata('status',$sess_array);
					redirect('Karyawan');
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
			, tbl_uji.jenis_bayar
			FROM
			tbl_harga_uji
			INNER JOIN tbl_uji 
			ON (tbl_harga_uji.id = tbl_uji.id_uji)
			INNER JOIN tbl_pelanggan 
			ON (tbl_pelanggan.id = tbl_uji.id_pelanggan) where status_uji = 'pending';")->result();
		$this->load->view('kasir/header_kasir');
		$this->load->view('kasir/home_karyawan',$data);
		$this->load->view('footer');
	}

	public function konfirmasi($id){
		$data = array(
			'status_uji' => 'process' ,

		);
		$time = array(
			'faktur' => $id,
			'status' => 'Menunggu Persetujuan Penyelia'
		);

		$this->db->insert('tbl_timeline', $time);

		if($this->db->update('tbl_uji', $data, array('faktur' => $id))){
			redirect('utama');
		}
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
			ON (tbl_pelanggan.id = tbl_uji.id_pelanggan) where status_uji != 'pending';")->result();
		$this->load->view('kasir/header_kasir');
		$this->load->view('kasir/riwayat_karyawan',$data);
		$this->load->view('footer');
	}

	public function keluar()
	{
		$this->session->unset_userdata('user');
		redirect('Karyawan'); 
	}
}
