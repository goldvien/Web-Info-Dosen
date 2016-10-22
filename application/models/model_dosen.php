<?php
	class Model_dosen extends CI_Model{
	 function __construct(){
	     $this->load->database(); // Berfungsi untuk memanggil database
	 }
	 
	 // Berfungsi untuk mengambil data pada tabel user yang ada di database kita
	 function select_login($data){ 
		 $user = $this->db->get_where('user_login',$data); 
		 return $user->num_rows();
	 }	

	 function select_dosen($user){
		$this->db->select('*');
		$this->db->from('master_dosen');
		$this->db->join('user_login','master_dosen.username=user_login.username');
		$this->db->where('master_dosen.username',$user);
		
		return  $this->db->get();
	 }
	 
	 function update_login($user,$data){
		$this->db->where('username',$user);
		$this->db->update('user_login',$data);		
	 }

	 function update_master($user,$data){
		$this->db->where('username',$user);
		$this->db->update('master_dosen',$data);		
	 }
    
    }
?>