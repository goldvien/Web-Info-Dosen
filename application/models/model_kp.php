<?php 

class Model_kp extends CI_Model{

	function __construct(){
		$this->load->database();
	}

  function get_kp(){
    $this->db->select('*');
    $this->db->from('master_kp');
    
    return  $this->db->get();
  }

	// //    hitung jumlah total data
 //    function total_record() {
 //        $this->db->from('master_kp');
 //        return $this->db->count_all_results();
 //    }
	// //    tampilkan dengan limit
 //    function user_limit($limit, $start = 0) {
 //        $this->db->order_by('nrp', 'DESC');
 //        $this->db->limit($limit, $start);
 //        return $this->db->get('master_kp');
 //    }
 //    function total_nrp($nrp) {
 //        $this->db->select("*");
 //        $this->db->like('nrp',$nrp);
 //        $this->db->from('master_kp');
 //        return $this->db->count_all_results();
 //    }
 //    function nrp_limit($nrp,$limit, $start = 0) {
 //        $this->db->order_by('nrp', 'DESC');
 //        $this->db->like('nrp',$nrp);
 //        $this->db->limit($limit, $start);
 //        return $this->db->get('master_kp');
 //    }
	
 //     function total_cari($cari,$tipe){
 //      $this->db->order_by('nrp', 'DESC');
 //      $this->db->select("*");
 //      $this->db->or_like(array('nrp' => $cari,
 //                                'nama'=>$cari,
 //                                'judul'=>$cari,
 //                                'tempat'=>$cari,
 //                                'no_sk'=>$cari,
 //                                'semester' => $cari,                               
 //                                'tgl_seminar'=>$cari));
 //      if($tipe==0){
 //        $this->db->or_like(array( 'kelas'=>$cari,
 //                                  'kontak'=>$cari,
 //                                  'tgl_sk'=>$cari,
 //                                  'perwalian'=>$cari));
 //      }else if($tipe==1){
 //        $this->db->or_like(array( 'hari_seminar'=> $cari,
 //                                  'jam_seminar' => $cari,
 //                                  'pembimbing'=> $cari,
 //                                  'penguji'=> $cari));
 //      }
 //      $this->db->from('master_kp');
 //      return $this->db->count_all_results();
 //     }
 //     function get_cari($cari,$limit, $start = 0,$tipe){
 //      $this->db->order_by('nrp', 'DESC');
 //      $this->db->select("*");
 //      $this->db->or_like(array('nrp' => $cari,
 //                                'nama'=>$cari,
 //                                'judul'=>$cari,
 //                                'tempat'=>$cari,
 //                                'no_sk'=>$cari,
 //                                'semester' => $cari,                               
 //                                'tgl_seminar'=>$cari));
 //     if($tipe==0){
 //        $this->db->or_like(array( 'kelas'=>$cari,
 //                                  'kontak'=>$cari,
 //                                  'tgl_sk'=>$cari,
 //                                  'perwalian'=>$cari));
 //      }else if($tipe==1){
 //        $this->db->or_like(array( 'hari_seminar'=> $cari,
 //                                  'jam_seminar' => $cari,
 //                                  'pembimbing'=> $cari,
 //                                  'penguji'=> $cari));
 //      }
 //      $this->db->limit($limit, $start);
 //        return $this->db->get('master_kp');
 //     }
}
?>