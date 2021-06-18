<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class home extends CI_Controller {

      public function __construct(){
        parent::__construct();
        $this->load->model('Dynamic_Dependent_model');
      }   

	public function index()
	{
        $data ['regions'] = $this->Dynamic_Dependent_model->fetch_regions(); 
		$this->load->view('home_page', $data);

	}
    function fetch_hospital_info()
 {
  if($this->input->post('region_id'))
  {
   echo $this->Dynamic_Dependent_model->fetch_hospital_info($this->input->post('region_id'));
  }
 }

 /*function fetch_tbl_specialization()
 {
  if($this->input->post('hospital_id'))
  {
   echo $this->Dynamic_Dependent_model->fetch_tbl_specialization($this->input->post('hospital_id'));
  }
 }*/



    public function fetch()
    {
       $this->load->model('Autocomplete_model');
       echo $this->autocomplete_model->fetch_data($this->uri->segment(3));
    }



        public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url().'home/index/');
    }

	
    public function load_Admin_menu()
    {
        $this->load->view('admin/home_page');
    }

    public function image()
    {
    # code...
    }

    public function addRegions()
    {
           $this->load->model('User_model');
            $data['regions'] = $this->User_model->getRegions();
            $this->loadViews("index", $this->global, $data, NULL);
            //return response :: json (['data'=> $data])
    }


   // public function show_regions($region_name)
  //  {
      //  $data = "select * from regions where region_name= region_name"
       // return response :: json (['message'=> $data])
  //  }




  
}
