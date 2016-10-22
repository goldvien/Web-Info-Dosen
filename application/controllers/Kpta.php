<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kpta extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("url");

		// memanggil model kelola buku
		$this->load->model('model_kpta');
		$this->load->model('model_dosen');
	}
	public function index()
	{
		$data['kalender_kp']=$this->model_kpta->select_kalenderkp()->result();
		$data['kalender_ta']=$this->model_kpta->select_kalenderta()->result();
		$this->load->view('view_kalender',$data);
	}
	public function prosedurkp()
	{
		$data['prosedur_kp_judul']=$this->model_kpta->select_prosedurkpjudul()->result();
		$data['prosedur_kp_detail']=$this->model_kpta->select_prosedurkp()->result();
		$this->load->view('view_prosedurkp',$data);
	}
	public function prosedurta()
	{
		$data['prosedur_ta_judul']=$this->model_kpta->select_prosedurtajudul()->result();
		$data['prosedur_ta_detail']=$this->model_kpta->select_prosedurta()->result();
		$this->load->view('view_prosedurta',$data);
	}
	

}
