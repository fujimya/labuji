<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {

	public function index()
	{
		$this->load->view('Grafik/masuk_lebing');
	}
	public function login(){
			$data = $this->db->query("select * from tbl_karyawan where jabatan = 'Lebing' and email ='".$this->input->post('email')."'")->result();

			if(empty($data)){
				$sess_array = array (
					'status' => '2' ,
				);
				$this->session->set_userdata('status',$sess_array);
				redirect('Grafik');
			}else{
				foreach ($data as $a) {
					if($this->encryption->decrypt($a->password) == $this->input->post('password') ){
						$sess_array = array (
							'id' => $a->id ,
							'jabatan' => $a->jabatan
						);
						$this->session->set_userdata('user',$sess_array);
						redirect('Grafik/orangan');	
					}else{
						$sess_array = array (
							'status' => '2' ,
						);
						$this->session->set_userdata('status',$sess_array);
						redirect('Grafik');
					}
				}
			}
		
	}

	public function orangan()
	{
		$ambil = $this->db->query("SELECT DISTINCT id_pelanggan FROM tbl_uji;")->result();
		$id_pel = array();
		$jumlah = array();
		foreach ($ambil as $amb) {
			$hitung = $this->db->query("SELECT * FROM tbl_uji where id_pelanggan = '".$amb->id_pelanggan."';")->num_rows();
			array_push($id_pel,$amb->id_pelanggan);
			array_push($jumlah,$hitung);
		}
		$data['id_pelanggan'] = $id_pel;
		$data['jumlah'] = $jumlah;
		$this->load->view('Grafik/grafik_header');
		$this->load->view('Grafik/grafik_pelanggan',$data);
	}

	public function Uji()
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
		$this->load->view('Grafik/grafik_header');
		$this->load->view('Grafik/grafik_uji',$data);
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
		$this->load->view('Grafik/grafik_header');
		$this->load->view('Grafik/grafik_uji',$data);
	}

	public function perusahaan()
	{
		$ambil = $this->db->query("SELECT DISTINCT id_pelanggan FROM tbl_uji;")->result();
		$id_pel = array();
		$jumlah = array();
		foreach ($ambil as $amb) {
			$hitung = $this->db->query("SELECT * FROM tbl_uji where id_pelanggan = '".$amb->id_pelanggan."';")->num_rows();
			array_push($id_pel,$amb->id_pelanggan);
			array_push($jumlah,$hitung);
		}
		$data['id_pelanggan'] = $id_pel;
		$data['jumlah'] = $jumlah;
		$this->load->view('Grafik/grafik_header');
		$this->load->view('Grafik/grafik_perusahaan',$data);
	}

	public function keluar()
	{
		$this->session->unset_userdata('user');
		redirect('Grafik'); 
	}


}
