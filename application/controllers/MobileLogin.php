<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MobileLogin extends CI_Controller {
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
		// $files = glob('captcha/*'); 
		// foreach($files as $file){ 
		// 	if(is_file($file))
		// 		unlink($file); 
			
		// }

		$data['image'] = $this->create_captcha();
		$this->load->view('mobilelogin',$data);
	}


	public function check_captcha(){
		if($this->input->post('captcha') == $this->sesion->userdata('captchaword')){
			return true;
		}else{
			$this->form_validation->set_message('check_captcha','Captcha Salah');
			return false;
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
				redirect('mlogin');
			}else{
				foreach ($data as $a) {
					if($this->encryption->decrypt($a->password) == $this->input->post('password') ){
						$sess_array = array (
							'id' => $a->id ,
						);
						$this->session->set_userdata('user',$sess_array);
						redirect('mprofil');	
					}else{
						$sess_array = array (
							'status' => '2' ,
						);
						$this->session->set_userdata('status',$sess_array);
						redirect('mlogin');
					}
				}
			}
		}else{
			$sess_array = array (
				'status' => '2' ,
			);
			$this->session->set_userdata('status',$sess_array);
			redirect('mlogin');
		}

	}
	public function keluar()
	{
		$this->session->unset_userdata('user');
		redirect('mlogin'); 
	}
}
