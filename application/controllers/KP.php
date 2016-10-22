<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KP extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("url");

		$this->load->library('pagination');
		$this->load->model('model_kp');
	}

    public function master($tipe){
        $data['master_kp']=$this->model_kp->get_kp()->result();
        if($tipe=='peserta'){
            $view='view_pesertakp';
        }else if($tipe=='seminar'){
            $view='view_seminarkp';
        }
        $this->load->view($view,$data); 
    }

//     public function cari(){

//         $caripeserta=  $this->input->post('caripeserta');
//         $cariseminar=  $this->input->post('cariseminar');
//         if(isset($caripeserta)){
//             $cari=$caripeserta;
//             $tipe=0;
//             $view='view_caripesertakp';
//             $paging='pagingpeserta';
//         }else if(isset($cariseminar)){
//             $cari=$cariseminar;
//             $tipe=1;
//             $view='view_cariseminarkp';
//             $paging='pagingseminar';
//         }
//         $config['base_url'] = base_url().'index.php/KP/'.$paging;
//         $config['total_rows'] = $this->model_kp->total_cari($cari,$tipe);
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
//         $rows = $this->model_kp->get_cari($cari,$config['per_page'],$start,$tipe)->result();

//         $data = array(
//             'master_kp' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
//       // echo json_encode ($query);
//         $this->load->view($view,$data);       

//      }
    
//     public function pagingpeserta(){
//         $caripeserta=  $this->input->post('caripeserta');     
//         $config['base_url'] = base_url().'index.php/KP/pagingpeserta/';
//         $config['total_rows'] = $this->model_kp->total_cari($caripeserta,0);
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
//         $rows = $this->model_kp->get_cari($caripeserta,$config['per_page'],$start,0)->result();

//         $data = array(
//             'master_kp' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
//       // echo json_encode ($query);
//       $this->load->view('view_pesertakp',$data);
//     }

//     public function pagingseminar(){
//         $cariseminar=  $this->input->post('cariseminar');      
//         $config['base_url'] = base_url().'index.php/KP/pagingseminar/';
//         $config['total_rows'] = $this->model_kp->total_cari($cariseminar,1);
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
//         $rows = $this->model_kp->get_cari($cariseminar,$config['per_page'],$start,1)->result();

//         $data = array(
//             'master_kp' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
//       // echo json_encode ($query);
//       $this->load->view('view_seminarkp',$data);
//     }

// 	public function peserta(){

// 		$config['base_url'] = base_url().'index.php/KP/peserta/';
//         $config['total_rows'] = $this->model_kp->total_record();
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
//         $rows = $this->model_kp->user_limit($config['per_page'],$start)->result();

//         $data = array(
//             'master_kp' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
// 		//$data['master_kp']=$this->model_kp->select_kp()->result();
// 		$this->load->view('view_pesertakp',$data);
// 	}
	
// 	public function seminar(){
// 		$config['base_url'] = base_url().'index.php/KP/seminar/';
//         $config['total_rows'] = $this->model_kp->total_record();
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
//         $rows = $this->model_kp->user_limit($config['per_page'],$start)->result();

//         $data = array(
//             'master_kp' => $rows,
//             'pagination' => $this->pagination->create_links(),
//             'start' => $start
//         );
// 		//$data['master_kp']=$this->model_kp->select_kp()->result();
// 		$this->load->view('view_seminarkp',$data);
// 	}
    
}
