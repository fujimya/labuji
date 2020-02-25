<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('masuk_admin');
	}
	public function login(){
		$data = $this->db->query("select * from tbl_karyawan where jabatan = 'su' and email ='".$this->input->post('email')."'")->result();

		if(empty($data)){
			$sess_array = array (
				'status' => '2' ,
			);
			$this->session->set_userdata('status',$sess_array);
			redirect('Admin');
		}else{
			foreach ($data as $a) {
				if($this->encryption->decrypt($a->password) == $this->input->post('password') ){
					$sess_array = array (
						'id' => $a->id ,
						'jabatan' => $a->jabatan ,
					);
					$this->session->set_userdata('user',$sess_array);
					redirect('home');	
				}else{
					$sess_array = array (
						'status' => '2' ,
					);
					$this->session->set_userdata('status',$sess_array);
					redirect('Admin');
				}
			}
		}
	}

	public function home(){
		$data['karyawan'] = $this->db->query('select * from tbl_karyawan')->result();
		$this->load->view('header_admin');
		$this->load->view('home_admin',$data);
		$this->load->view('footer');
	}

	public function tambah(){
		$this->load->view('register_admin');
	}
	public function add_karyawan(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => $this->encryption->encrypt($this->input->post('password')),
			'jabatan' => $this->input->post('jabatan'),

		);

		if($this->db->insert('tbl_karyawan', $data)){
			redirect('Admin/home');
		}
	}

	public function hapus_karyawan($id){
		if($this->db->delete('tbl_karyawan',array('id'=>$id))){
			redirect('Admin/home'); 
		}
	}

	public function keluar()
	{
		$this->session->unset_userdata('user');
		redirect('Admin'); 
	}

	public function pendaftaran(){
		$data['pelanggan'] = $this->db->query('select * from tbl_pelanggan')->result();
		$this->load->view('header_admin');
		$this->load->view('pelanggan_admin',$data);
		$this->load->view('footer');
	}

	public function verifikasi_pelanggan($id){
		$data = array(
			'status' => '1' ,

		);

		if($this->db->update('tbl_pelanggan', $data, array('id' => $id))){
           redirect('Admin/pendaftaran');
		}
	}

	public function hapus_pelanggan($id){
		if($this->db->delete('tbl_pelanggan',array('id'=>$id))){
			redirect('Admin/pendaftaran'); 
		}
	}
}
