<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("url");

		// memanggil model kelola buku
		$this->load->model('model_dosen');
	}
	
	public function index()
	{
		$username=$this->session->userdata('username');
		$data['dosen']=$this->model_dosen->select_dosen($username)->row();
		$this->load->view('view_home',$data);
	}

	public function master(){
			$username=$this->session->userdata('username');
			$data['dosen']=$this->model_dosen->select_dosen($username)->row();
			$this->load->view('view_dosen',$data);
	}

	public function edit_master(){
		$data1['username']=$this->input->post('username');
		$data1['password']=$this->input->post('password');
		$data2['nama']=$this->input->post('nama');
		$data2['alamat']=$this->input->post('alamat');
		$data2['telepon']=$this->input->post('telepon');
		$data2['email']=$this->input->post('email');
		$data2['kk']=$this->input->post('kk');
		$data2['nip']=$this->input->post('nip');
		$data2['nidn']=$this->input->post('nidn');
		$user1=$this->session->userdata('username');
		$this->model_dosen->update_login($user1,$data1);
		$user2=$this->input->post('username');
		$this->model_dosen->update_master($user2,$data2);
		$sesi=$this->session->set_userdata($data1);
		redirect(site_url('Dosen/master'));
	}
		
}
