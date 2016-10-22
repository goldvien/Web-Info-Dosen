<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		 parent::__construct();
		 $this->load->model('model_dosen'); // Berfungsi untuk memanggil Login_model
	}
		 
		 // Berfungsi untuk menampilkan halaman login
	 function index() { 
		 $data=array('title'=>'Login Administrator',
		 'isi' =>'login');
		 $this->load->view('login',$data);
	 }
		 
		 // Berfungsi untuk melakukan validasi login
	 function validasi() { 
		 $data=array(
		 	'username'=>$this->input->post('username'),
		 	'password'=>$this->input->post('password')
		 );
		 
		 // Berfungsi untuk memanggil fungsi ambil_data pada class login_model
		 $cek=$this->model_dosen->select_login($data);
		 if($cek == 1) { // Berfungsi untuk mengecek kebenaran data login yang diinput (1 = true)
		 
		 // Berfungsi untuk menyimpan user data
		 $sesi=$this->session->set_userdata($data);
		 // Jika data yang dimasukkan valid maka akan redirect ke halaman Dashboard
		 	redirect('Dosen');
		 }else{ // Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
		 	$this->load->view('login');
		 }
	}
		 
		 // Berfungsi untuk menghapus session atau logout
	function logout() {
		 session_destroy();
		 redirect('welcome');
	} 
}
	