<?php 

class Model_ta extends CI_Model{

	function __construct(){
		$this->load->database();
	}

  function get_ta(){
    $this->db->select('*');
    $this->db->from('master_ta');
    
    return  $this->db->get();
  }
	// //    hitung jumlah total data
 //    function total_record() {
 //        $this->db->from('master_ta');
 //        return $this->db->count_all_results();
 //    }
	// //    tampilkan dengan limit
 //    function user_limit($limit, $start = 0) {
 //        $this->db->order_by('nrp', 'DESC');
 //        $this->db->limit($limit, $start);
 //        return $this->db->get('master_ta');
 //    }

 //    function total_cari($cari,$tipe){
 //      $this->db->order_by('nrp', 'DESC');
 //      $this->db->select("*");
 //      $this->db->or_like(array('nrp' => $cari,
 //                                'nama'=>$cari,
 //                                'judul'=>$cari,
 //                                'nama_pembimbing1'=>$cari,
 //                                'nama_pembimbing2'=>$cari,                             
 //                                'kelas'=>$cari));
 //      if($tipe==0){
 //        $this->db->or_like(array( 'kk'=>$cari,
 //                                  'kontak'=>$cari,
 //                                  'semester'=>$cari,
 //                                  'tgl_sk'=>$cari,
 //                                  'tgl_seminar'=>$cari,
 //                                  'tgl_sidang'=>$cari,
 //                                  'perwalian'=>$cari));
 //      }else if($tipe==1){
 //        $this->db->or_like(array( 'tgl_seminar'=> $cari,
 //                                  'penguji1_seminar' => $cari,
 //                                  'penguji2_seminar'=> $cari,
 //                                  'no_sk'=> $cari));
 //      }else if($tipe=='sidang'){
 //        $this->db->or_like(array( 'hari_sidang'=> $cari,
 //                                  'penguji1_sidang' => $cari,
 //                                  'penguji2_sidang'=> $cari,
 //                                  'no_sk'=> $cari));
 //      }
 //      $this->db->from('master_ta');
 //      return $this->db->count_all_results();
 //     }
 //     function get_cari($cari,$limit, $start = 0,$tipe){
 //      $this->db->order_by('nrp', 'DESC');
 //      $this->db->select("*");
 //      $this->db->or_like(array('nrp' => $cari,
 //                                'nama'=>$cari,
 //                                'judul'=>$cari,
 //                                'nama_pembimbing1'=>$cari,
 //                                'nama_pembimbing2'=>$cari,                             
 //                                'kelas'=>$cari));
 //      if($tipe==0){
 //        $this->db->or_like(array( 'kk'=>$cari,
 //                                  'kontak'=>$cari,
 //                                  'semester'=>$cari,
 //                                  'tgl_sk'=>$cari,
 //                                  'tgl_seminar'=>$cari,
 //                                  'tgl_sidang'=>$cari,
 //                                  'perwalian'=>$cari));
 //      }else if($tipe==1){
 //        $this->db->or_like(array( 'tgl_seminar'=> $cari,
 //                                  'penguji1_seminar' => $cari,
 //                                  'penguji2_seminar'=> $cari,
 //                                  'no_sk'=> $cari));
 //      }else if($tipe=='sidang'){
 //        $this->db->or_like(array( 'hari_sidang'=> $cari,
 //                                  'penguji1_sidang' => $cari,
 //                                  'penguji2_sidang'=> $cari,
 //                                  'no_sk'=> $cari));
 //      }
 //      $this->db->limit($limit, $start);
 //        return $this->db->get('master_ta');
 //     }
	
}

?>