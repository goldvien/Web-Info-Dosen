<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bimbingan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("url");

		// memanggil model kelola buku
		$this->load->model('model_bimbingan');
	}
	public function jadual(){
		$username=$this->session->userdata('username');
		$data['hari']=$this->model_bimbingan->select_hari()->result();
		$data['jadual_bimbingan']=$this->model_bimbingan->select_bimbingan($username)->result();

		$this->load->view('view_bimbingan',$data);
	}

	public function edit_jadual(){
		$username=$this->session->userdata('username');
		$hari="Senin";
		$data1['jam']=$this->input->post('jam0');
		$data1['keterangan']=$this->input->post('ket0');
		$this->model_bimbingan->update_jadual($username,$hari,$data1);
		$hari="Selasa";
		$data2['jam']=$this->input->post('jam1');
		$data2['keterangan']=$this->input->post('ket1');
		$this->model_bimbingan->update_jadual($username,$hari,$data2);
		$hari="Rabu";
		$data3['jam']=$this->input->post('jam2');
		$data3['keterangan']=$this->input->post('ket2');
		$this->model_bimbingan->update_jadual($username,$hari,$data3);
		$hari="Kamis";
		$data4['jam']=$this->input->post('jam3');
		$data4['keterangan']=$this->input->post('ket3');
		$this->model_bimbingan->update_jadual($username,$hari,$data4);
		$hari="Jumat";
		$data5['jam']=$this->input->post('jam4');
		$data5['keterangan']=$this->input->post('ket4');
		$this->model_bimbingan->update_jadual($username,$hari,$data5);
		$hari="Sabtu";
		$data6['jam']=$this->input->post('jam5');
		$data6['keterangan']=$this->input->post('ket5');
		$this->model_bimbingan->update_jadual($username,$hari,$data6);
		$hari="Minggu";
		$data7['jam']=$this->input->post('jam6');
		$data7['keterangan']=$this->input->post('ket6');
		$this->model_bimbingan->update_jadual($username,$hari,$data7);
		redirect(site_url('Bimbingan/jadual'));
	}
	
}
