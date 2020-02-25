<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function index()
	{
		$this->load->view('pelanggan/register');
	}

	public function daftar(){
		$this->load->view('pelanggan/mregister');
	}

	//profil web
	public function profil()
	{
		$status = $this->session->userdata('user');
		$data['profil'] = $this->db->query("select * from tbl_pelanggan where id='".$status['id']."'")->result();
		$status = $this->session->userdata('user');
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
			ON (tbl_pelanggan.id = tbl_uji.id_pelanggan) WHERE tbl_uji.id_pelanggan = '".$status['id']."';")->result();
		$this->load->view('header');
		$this->load->view('profil',$data);
		$this->load->view('footer');
	}

	//profil mobile
	public function mprofil()
	{
		$status = $this->session->userdata('user');
		$data['profil'] = $this->db->query("select * from tbl_pelanggan where id='".$status['id']."'")->result();
		$status = $this->session->userdata('user');
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
			ON (tbl_pelanggan.id = tbl_uji.id_pelanggan) WHERE tbl_uji.id_pelanggan = '".$status['id']."';")->result();
		$this->load->view('mheader');
		$this->load->view('mprofil',$data);
		$this->load->view('footer');
	}

	//web aps

	public function ujilab()
	{
		$status = $this->session->userdata('user');
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
			ON (tbl_pelanggan.id = tbl_uji.id_pelanggan) WHERE tbl_uji.id_pelanggan = '".$status['id']."';")->result();
		$this->load->view('header');
		$this->load->view('pelanggan/uji',$data);
		$this->load->view('footer');
	}

	//for mobile
	public function m_ujilab()
	{
		$status = $this->session->userdata('user');
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
			, tbl_uji.status_periksa
			, tbl_uji.jenis_bayar
			FROM
			tbl_harga_uji
			INNER JOIN tbl_uji 
			ON (tbl_harga_uji.id = tbl_uji.id_uji)
			INNER JOIN tbl_pelanggan 
			ON (tbl_pelanggan.id = tbl_uji.id_pelanggan) WHERE tbl_uji.id_pelanggan = '".$status['id']."';")->result();
		$this->load->view('mheader');
		$this->load->view('m_uji',$data);
		$this->load->view('footer');
	}

	public function daftar_ujilab()
	{
		$data['list'] = $this->db->query("select * from tbl_harga_uji")->result();
		$this->load->view('header');
		$this->load->view('pelanggan/uji_menu',$data);
		$this->load->view('footer');
	}

	public function m_daftar_ujilab()
	{
		$data['list'] = $this->db->query("select * from tbl_harga_to_user")->result();
		$this->load->view('mheader');
		$this->load->view('menu_uji',$data);
		$this->load->view('footer');
	}

	public function isi_ujilab($id)
	{
		$data['jadwal'] = $this->db->query("select * from tbl_jadwal where kuota > 0;")->result();
		$data['id_uji'] = $id;
		$this->load->view('mheader');
		$this->load->view('mdaftaruji',$data);
		$this->load->view('footer');
	
	}

	public function ujilab_isi($id)
	{
		$data['jadwal'] = $this->db->query("select * from tbl_jadwal where kuota > 0;")->result();
		$data['id_uji'] = $id;
		$this->load->view('header');
		$this->load->view('pelanggan/daftaruji',$data);
		//$this->load->view('footer');
	
	}

	public function ujilab_tambah()
	{
		$status = $this->session->userdata('user');
		$tanggal = $this->db->query("select * from tbl_jadwal where id = '".$this->input->post('tanggal_uji')."'")->result();
		$gettgl = "";
		$kuota = 0;
		foreach ($tanggal as $tgl) {
			$gettgl = $tgl->tanggal;
			$kuota = $tgl->kuota;
		}
		$data = array(
			'faktur' => chr(rand(65,90)).chr(rand(65,90)).rand(100,10000).chr(rand(65,90)),
			'id_pelanggan'=> $status['id'],
			'jenis_uji' => $this->input->post('jenis_uji'),
			'id_uji' => $this->input->post('id_uji'),
			'tanggal_uji' => $gettgl,
			'jenis_bayar' => $this->input->post('jenis_bayar'),

		);

		$time = array(
			'faktur' => $data['faktur'],
			'status' => 'Menunggu konfirmasi Bayar'
		);

		$this->db->insert('tbl_timeline', $time);

		if($this->db->query("update tbl_jadwal set kuota = '".($kuota - 1)."' where id = '".$this->input->post('tanggal_uji')."'")){
			if($this->db->insert('tbl_uji', $data)){
				redirect('m_uji');
			}
		}
		//print_r($data);
		//redirect('Pelanggaran');
	}

	public function tambah_ujilab()
	{
		$status = $this->session->userdata('user');
		$tanggal = $this->db->query("select * from tbl_jadwal where id = '".$this->input->post('tanggal_uji')."'")->result();
		$gettgl = "";
		$kuota = 0;
		foreach ($tanggal as $tgl) {
			$gettgl = $tgl->tanggal;
			$kuota = $tgl->kuota;
		}
		$data = array(
			'faktur' => chr(rand(65,90)).chr(rand(65,90)).rand(100,10000).chr(rand(65,90)),
			'id_pelanggan'=> $status['id'],
			'jenis_uji' => $this->input->post('jenis_uji'),
			'id_uji' => $this->input->post('id_uji'),
			'tanggal_uji' => $gettgl,
			'jenis_bayar' => $this->input->post('jenis_bayar'),

		);
		if($this->db->query("update tbl_jadwal set kuota = '".($kuota - 1)."' where id = '".$this->input->post('tanggal_uji')."'")){
			if($this->db->insert('tbl_uji', $data)){
				redirect('uji');
			}
		}
		//print_r($data);
		//redirect('Pelanggaran');
	}

	public function upload_bukti()
	{
		$config['upload_path']   = FCPATH.'/bukti/';
		$config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
		$config['file_name']     = chr(rand(65,90)).rand(10,100).rand(100,10000).chr(rand(65,90));
		$config['max_size']             = 500;
		$config['create_thumb']= FALSE;
		$config['maintain_ratio']= FALSE;
		$config['quality']= '50%';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('bukti'))
		{
			echo 'File terlalu besar ukurannya, silahkan upload ulang. <a href="'.base_url().'uji" >Klik disini</a> untuk upload ulang';
		}
		else
		{
			$data = array(
				'bukti_bayar' => base_url().'bukti/'.$this->upload->data('file_name') ,

			);

			if($this->db->update('tbl_uji', $data, array('faktur' => $this->input->post('faktur')))){
				redirect('uji');
			}

		}
	}

	public function mupload_bukti()
	{
		$config['upload_path']   = FCPATH.'/bukti/';
		$config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
		$config['file_name']     = chr(rand(65,90)).rand(10,100).rand(100,10000).chr(rand(65,90));
		$config['max_size']             = 500;
		$config['create_thumb']= FALSE;
		$config['maintain_ratio']= FALSE;
		$config['quality']= '50%';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('bukti'))
		{
			echo 'File terlalu besar ukurannya, silahkan upload ulang. <a href="'.base_url().'m_uji" >Klik disini</a> untuk upload ulang';
		}
		else
		{
			$data = array(
				'bukti_bayar' => base_url().'bukti/'.$this->upload->data('file_name') ,

			);

			if($this->db->update('tbl_uji', $data, array('faktur' => $this->input->post('faktur')))){
				redirect('m_uji');
			}

		}
	}

	public function invoice($faktur){
		$status = $this->session->userdata('user');
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
			ON (tbl_pelanggan.id = tbl_uji.id_pelanggan) WHERE tbl_uji.id_pelanggan = '".$status['id']."' and faktur = '".$faktur."';")->result();
		$this->load->view('invoice',$data);
	}

}
