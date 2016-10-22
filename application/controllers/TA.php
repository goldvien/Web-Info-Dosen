<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TA extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("url");

		$this->load->library('pagination');
		$this->load->model('model_ta');
	}

    public function master($tipe){
        $data['master_ta']=$this->model_ta->get_ta()->result();
        if($tipe=='peserta'){
            $view='view_pesertata';
        }else if($tipe=='seminar'){
            $view='view_seminarta';
        }else if($tipe=='sidang'){
            $view='view_sidangta';
        }
        $this->load->view($view,$data); 
    }

//     public function cari(){
//         $caripeserta=  $this->input->post('caripeserta');
//         $cariseminar=  $this->input->post('cariseminar');
//         $carisidang=  $this->input->post('carisidang');
//         if(isset($caripeserta)){
//             $cari=$caripeserta;
//             $tipe=0;
//             $view='view_caripesertata';
//             $paging='pagingpeserta';
//         }else if(isset($cariseminar)){
//             $cari=$cariseminar;
//             $tipe=1;
//             $view='view_cariseminarta';
//             $paging='pagingseminar';
//         }else if(isset($carisidang)){
//             $cari=$carisidang;
//             $tipe='sidang';
//             $view='view_carisidangta';
//             $paging='pagingsidang';
//         }
//         $config['base_url'] = base_url().'index.php/TA/'.$paging;
//         $config['total_rows'] = $this->model_ta->total_cari($cari,$tipe);
//         $config['per_page'] = 5;
//         $config['uri_segment'] = 3;
//         $config['attributes'] = array('class' => 'btn btn-default');
//         $config['full_tag_open'] = '<div class="btn-group">';
//         $config['full_tag_close'] = '</div>';
//         $config['cur_tag_open'] = '<button type="button" class="btn btn-primary">';
//         $config['cur_tag_close'] = '</button>';
//         $this->pagination->initialize($config); 
        
// //        menentukan offset record dari uri segment
//         $start = $this->uri->segment(3, 0);
// //        ubah data menjadi tampilan per limit
//         $rows = $this->model_ta->get_cari($cari,$config['per_page'],$start,$tipe)->result();

//         $data = array(
//             'master_ta' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
//       // echo json_encode ($query);
//         $this->load->view($view,$data);       

//      }

//      public function pagingpeserta(){
//         $caripeserta=  $this->input->post('caripeserta');     
//         $config['base_url'] = base_url().'index.php/TA/pagingpeserta/';
//         $config['total_rows'] = $this->model_ta->total_cari($caripeserta,0);
//         $config['per_page'] = 5;
//         $config['uri_segment'] = 3;
//         $config['attributes'] = array('class' => 'btn btn-default');
//         $config['full_tag_open'] = '<div class="btn-group">';
//         $config['full_tag_close'] = '</div>';
//         $config['cur_tag_open'] = '<button type="button" class="btn btn-primary">';
//         $config['cur_tag_close'] = '</button>';
//         $this->pagination->initialize($config); 
        
// //        menentukan offset record dari uri segment
//         $start = $this->uri->segment(3, 0);
// //        ubah data menjadi tampilan per limit
//         $rows = $this->model_ta->get_cari($caripeserta,$config['per_page'],$start,0)->result();

//         $data = array(
//             'master_ta' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
//       // echo json_encode ($query);
//       $this->load->view('view_pesertata',$data);
//     }

//     public function pagingseminar(){
//         $cariseminar=  $this->input->post('cariseminar');      
//         $config['base_url'] = base_url().'index.php/TA/pagingseminar/';
//         $config['total_rows'] = $this->model_ta->total_cari($cariseminar,1);
//         $config['per_page'] = 5;
//         $config['uri_segment'] = 3;
//         $config['attributes'] = array('class' => 'btn btn-default');
//         $config['full_tag_open'] = '<div class="btn-group">';
//         $config['full_tag_close'] = '</div>';
//         $config['cur_tag_open'] = '<button type="button" class="btn btn-primary">';
//         $config['cur_tag_close'] = '</button>';
//         $this->pagination->initialize($config); 
        
// //        menentukan offset record dari uri segment
//         $start = $this->uri->segment(3, 0);
// //        ubah data menjadi tampilan per limit
//         $rows = $this->model_ta->get_cari($cariseminar,$config['per_page'],$start,1)->result();

//         $data = array(
//             'master_ta' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
//       // echo json_encode ($query);
//       $this->load->view('view_seminarta',$data);
//     }

//     public function pagingsidang(){
//         $carisidang=  $this->input->post('carisidang');      
//         $config['base_url'] = base_url().'index.php/TA/pagingsidang/';
//         $config['total_rows'] = $this->model_ta->total_cari($carisidang,'sidang');
//         $config['per_page'] = 5;
//         $config['uri_segment'] = 3;
//         $config['attributes'] = array('class' => 'btn btn-default');
//         $config['full_tag_open'] = '<div class="btn-group">';
//         $config['full_tag_close'] = '</div>';
//         $config['cur_tag_open'] = '<button type="button" class="btn btn-primary">';
//         $config['cur_tag_close'] = '</button>';
//         $this->pagination->initialize($config); 
        
// //        menentukan offset record dari uri segment
//         $start = $this->uri->segment(3, 0);
// //        ubah data menjadi tampilan per limit
//         $rows = $this->model_ta->get_cari($carisidang,$config['per_page'],$start,'sidang')->result();

//         $data = array(
//             'master_ta' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
//       // echo json_encode ($query);
//       $this->load->view('view_sidangta',$data);
//     }

// 	public function peserta(){
// 		$config['base_url'] = base_url().'index.php/TA/peserta/';
//         $config['total_rows'] = $this->model_ta->total_record();
//         $config['per_page'] = 5;
//         $config['uri_segment'] = 3;
//         $config['attributes'] = array('class' => 'btn btn-default');
//         $config['full_tag_open'] = '<div class="btn-group">';
//         $config['full_tag_close'] = '</div>';
//         $config['cur_tag_open'] = '<button type="button" class="btn btn-primary">';
//         $config['cur_tag_close'] = '</button>';
//         $this->pagination->initialize($config); 
        
// //        menentukan offset record dari uri segment
//         $start = $this->uri->segment(3, 0);
// //        ubah data menjadi tampilan per limit
//         $rows = $this->model_ta->user_limit($config['per_page'],$start)->result();

//         $data = array(
//             'master_ta' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
		
// 		$this->load->view('view_pesertata',$data);
// 	}
// 	public function seminar(){
// 		$config['base_url'] = base_url().'index.php/TA/seminar/';
//         $config['total_rows'] = $this->model_ta->total_record();
//         $config['per_page'] = 5;
//         $config['uri_segment'] = 3;
//         $config['attributes'] = array('class' => 'btn btn-default');
//         $config['full_tag_open'] = '<div class="btn-group">';
//         $config['full_tag_close'] = '</div>';
//         $config['cur_tag_open'] = '<button type="button" class="btn btn-primary">';
//         $config['cur_tag_close'] = '</button>';
//         $this->pagination->initialize($config); 
        
// //        menentukan offset record dari uri segment
//         $start = $this->uri->segment(3, 0);
// //        ubah data menjadi tampilan per limit
//         $rows = $this->model_ta->user_limit($config['per_page'],$start)->result();

//         $data = array(
//             'master_ta' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
		
// 		$this->load->view('view_seminarta',$data);
// 	}
// 	public function sidang(){
// 		$config['base_url'] = base_url().'index.php/TA/sidang/';
//         $config['total_rows'] = $this->model_ta->total_record();
//         $config['per_page'] = 5;
//         $config['uri_segment'] = 3;
//         $config['attributes'] = array('class' => 'btn btn-default');
//         $config['full_tag_open'] = '<div class="btn-group">';
//         $config['full_tag_close'] = '</div>';
//         $config['cur_tag_open'] = '<button type="button" class="btn btn-primary">';
//         $config['cur_tag_close'] = '</button>';
//         $this->pagination->initialize($config); 
        
// //        menentukan offset record dari uri segment
//         $start = $this->uri->segment(3, 0);
// //        ubah data menjadi tampilan per limit
//         $rows = $this->model_ta->user_limit($config['per_page'],$start)->result();

//         $data = array(
//             'master_ta' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
		
// 		$this->load->view('view_sidangta',$data);
// 	}
	
}
