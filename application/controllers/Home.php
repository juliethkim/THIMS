<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Home extends CI_Controller {

      public function __construct(){
        parent::__construct();
        $this->load->model('Dynamic_Dependent_model');
           $this->load->model('Hospital_info_model');
           $this->load->model('Mymodel_model');
            $this->load->model('User_model');
        $this->load->database();

      }   


 function index()
 {
  $data['regions'] = $this->Dynamic_Dependent_model->fetch_regions();
  $data['hospital_ownership'] = $this->Dynamic_Dependent_model->fetch_hospital_ownership();
  $data['hospital_category'] = $this->Dynamic_Dependent_model->fetch_hospital_category();

  $this->load->view('home_page', $data);
  $this->input->get('hospital_info');
  $hospital_info = $this->input->post('hospital_info');
 }


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
  $region_id=$this->input->post('regions');
  $ownership_id=$this->input->post('hospital_ownership');
  $category_id=$this->input->post('hospital_category');
   $data['results']=$this->Hospital_info_model->hospital_search($region_id,$ownership_id,$category_id);

    $this->load->view("hospital_view",  $data, NULL);
 
 }


function get_all_hospital_info()
    {
        $hospital = $this->input->post('hospital');
      
        $data['results'] = $this->Hospital_info_model->search_hospital($hospital);
     

        $this->load->view('hospital_view', $data);
    }

  }