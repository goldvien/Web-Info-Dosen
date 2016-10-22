<?php 

class Model_kpta extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function select_kalenderkp(){
		$this->db->select('*');
		$this->db->from('kalender_kp');
		
		return  $this->db->get();
	}
	function select_kalenderta(){
		$this->db->select('*');
		$this->db->from('kalender_ta');
		
		return  $this->db->get();
	}
	
	function select_prosedurkpjudul(){
		$this->db->select('*');
		$this->db->from('prosedur_kp_judul');
		
		return  $this->db->get();
	}
	function select_prosedurkp(){
		$this->db->select('*');
		$this->db->from('prosedur_kp_judul');
		$this->db->join('prosedur_kp_detail','prosedur_kp_judul.id=prosedur_kp_detail.id_judul');
		
		return  $this->db->get();
	}
	function select_prosedurtajudul(){
		$this->db->select('*');
		$this->db->from('prosedur_ta_judul');
		
		return  $this->db->get();
	}
	function select_prosedurta(){
		$this->db->select('*');
		$this->db->from('prosedur_ta_judul');
		$this->db->join('prosedur_ta_detail','prosedur_ta_judul.id=prosedur_ta_detail.id_judul');
		
		return  $this->db->get();
	}
	
}
 ?>