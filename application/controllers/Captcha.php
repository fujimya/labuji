<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->form_validation->set_rules('captcha','captcha','trim|calback_check_captcha|required');
		if($this->form_validation->run() == false){

		}
	}

	public function create_captcha(){
		$option = array(
			'img_path' => './captcha',
			'img_url' => base_url('captcha'),
			'img_width' => '250',
			'img_height' => '50',
			'expiration' => 7200
		);
		$cap = create_captcha($option);
		$image = $cap['image'];
		$this->sesion->set_userdata('captchaword',$cap['word']);

		return $image;
	}

	public function check_captcha(){
		if($this->input->post('captcha') == $this->sesion->userdata('captchaword')){
			return true;
		}else{
			$this->form_validation->set_message('check_captcha','Captcha Salah');
			return false;
		}
	}
	
}
