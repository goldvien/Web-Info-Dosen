<?php 

class Model_bimbingan extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	 function select_hari(){
		$this->db->select('*');
		$this->db->from('hari');
		
		return  $this->db->get();
	 }


	function select_bimbingan($user){
		$this->db->select('*');
		$this->db->from('jadual_bimbingan');
		$this->db->join('master_dosen','jadual_bimbingan.username=master_dosen.username');
		$this->db->where('master_dosen.username',$user);
		
		return  $this->db->get();
	}

	function update_jadual($user,$hari,$data){
		$this->db->where(array('username' => $user, 'hari' => $hari));
		$this->db->update('jadual_bimbingan',$data);		
	}
	
}

?>