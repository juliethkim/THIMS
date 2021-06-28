<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Home extends CI_Controller {

      public function __construct(){
        parent::__construct();
        $this->load->model('Dynamic_Dependent_model');
        // $this->load->model('HospitalInfo_model');
           $this->load->model('Hospital_info_model');
           $this->load->model('Mymodel_model');
            $this->load->model('User_model');
        $this->load->database();

      }   

	/*public function index()
	{
        $data ['regions'] = $this->Dynamic_Dependent_model->fetch_regions(); 
         $data1 ['category'] = $this->Dynamic_Dependent_model->fetch_category(); 
         $data2 ['hospital_ownership'] = $this->Dynamic_Dependent_model->fetch_hospital_ownership();
		$this->load->view('home_page', $data, $data1, $data2);

	}
    function fetch_hospital_info()
 {
  if($this->input->post('region_id','category_id', 'ownership_id'))


  {
   echo $this->Dynamic_Dependent_model->fetch_hospital_info($this->input->post('region_id', 'category_id', 'ownership_id'));
  }
 }*/



/* function fetch_hospital_info1()
 {
  if($this->input->post('category_id'))


  {
   echo $this->Dynamic_Dependent_model->fetch_hospital_info1($this->input->post('category_id'));
  }
 }*/



 /*function fetch_tbl_specialization()
 {
  if($this->input->post('hospital_id'))
  {
   echo $this->Dynamic_Dependent_model->fetch_tbl_specialization($this->input->post('hospital_id'));
  }
 }*/



   /* public function fetch()
    {
       $this->load->model('Autocomplete_model');
       echo $this->autocomplete_model->fetch_data($this->uri->segment(3));
    }*/








 function index()
 {
  $data['regions'] = $this->Dynamic_Dependent_model->fetch_regions();
  $data['hospital_ownership'] = $this->Dynamic_Dependent_model->fetch_hospital_ownership();
  $data['hospital_category'] = $this->Dynamic_Dependent_model->fetch_hospital_category();
  $this->load->view('home_page', $data);
  $this->input->get('hospital_info');
  $hospital_info = $this->input->post('hospital_info');
 }
//Hospital ownership function commented to test
 /*function hospital_ownership()
 {
   $data['hospital_ownership'] = $this->Dynamic_Dependent_model->fetch_hospital_ownership();
  $this->load->view('home_page', $data);*/



  /*if($this->input->post('region_id'))
  {
   echo $this->dynamic_dependent_model->fetch_hospital_ownership($this->input->post('region_id'));
  }*/


/* function fetch_hospital_category()
 {
  if($this->input->post('ownership_id'))
  {
   echo $this->dynamic_dependent_model->fetch_hospital_category($this->input->post('ownership_id'));
  }
 }*/




     function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url().'home/index/');
    }

	
     function load_Admin_menu()
    {
        $this->load->view('admin/home_page');
    }

     function image()
    {
    # code...
    }


     function addRegions()
    {
           $this->load->model('User_model');
            $data['regions'] = $this->User_model->getRegions();
            $this->loadViews("index", $this->global, $data, NULL);
            //return response :: json (['data'=> $data])
    }


    function search()
 {
  // $data['regions'] = $this->Dynamic_Dependent_model->fetch_regions();
  // $data['hospital_ownership'] = $this->Dynamic_Dependent_model->fetch_hospital_ownership();
  // $data['hospital_category'] = $this->Dynamic_Dependent_model->fetch_hospital_category();
  // $this->load->view('home_page', $data);
  // $this->input->get('hospital_info');
  $region_id=$this->input->post('regions');
  $ownership_id=$this->input->post('hospital_ownership');
  $category_id=$this->input->post('hospital_category');
   $data['results']=$this->Hospital_info_model->hospital_search($region_id,$ownership_id,$category_id);

    $this->load->view("hospital_view",  $data, NULL);
 
 }



  // function search_hospitalInfo()
  //   {
  //       $myhospital = $this->input->post('myhospital'); 
  //       $data['results'] = $this->HospitalInfo_model->search_hospitalInfo($myhospital);


  //       $this->load->view('HospitalInfo_view', $data);
  //   }



function get_all_hospital_info()
    {
        $hospital = $this->input->post('hospital');
       // $regions = $this->input->post()
      
        $data['results'] = $this->Hospital_info_model->search_hospital($hospital);
     

        $this->load->view('hospital_view', $data);
    }


  
// function hospital_search()
//     {
//         $hospitalinfo = $this->input->post('hospitalinfo');
//        // $regions = $this->input->post()
      
//         $data['results'] = $this->Hospital_info_model->hospital_search($hospitalinfo);
     

//         $this->load->view('hospital_view', $data);
//     }
  }