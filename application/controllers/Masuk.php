<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	function create_captcha(){
		$this->load->helper('captcha');
		$option = array(
			'word'          => chr(rand(65,90)).chr(rand(65,90)).rand(100,10000).chr(rand(65,90)),
			'img_path'      => './captcha/',
			'img_url'       => base_url().'captcha/',
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
		$data['image'] = $this->create_captcha();
		$this->load->view('pelanggan/masuk',$data);
	}
	public function register()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nope' => $this->input->post('nope'),
			'alamat' => $this->input->post('alamat'),
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'email' => $this->input->post('email'),
			'password' => $this->encryption->encrypt($this->input->post('password')),

		);

		if($this->db->insert('tbl_pelanggan', $data)){
			$sess_array = array (
				'status' => '1' ,
			);
			$this->session->set_userdata('status',$sess_array);
			redirect('mlogin');
		}

	}

	public function login()
	{
		if($this->input->post('captchatxt') == $this->session->userdata('captchaword')){
			$data = $this->db->query("select * from tbl_pelanggan where status='1' and email ='".$this->input->post('email')."'")->result();

			if(empty($data)){
				$sess_array = array (
					'status' => '2' ,
				);
				$this->session->set_userdata('status',$sess_array);
				redirect('');
			}else{
				foreach ($data as $a) {
					if($this->encryption->decrypt($a->password) == $this->input->post('password') ){
						$sess_array = array (
							'id' => $a->id ,
						);
						$this->session->set_userdata('user',$sess_array);
						redirect('profil');	
					}else{
						$sess_array = array (
							'status' => '2' ,
						);
						$this->session->set_userdata('status',$sess_array);
						redirect('');
					}
				}
			}
		}else{
			$sess_array = array (
				'status' => '2' ,
			);
			$this->session->set_userdata('status',$sess_array);
			redirect('');
		}
		
	}
	public function keluar()
	{
		$this->session->unset_userdata('user');
		redirect(''); 
	}
}
