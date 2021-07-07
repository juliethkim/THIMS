<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
Class Search Extends CI_Controller
{
    function __Construct()
    {        
        parent::__Construct();

        $this->load->database();
        $this->load->model('Mymodel_model');
        $this->load->model('Service_model');
        $this->load->model('Specialist_model');



    }

    function search_hospital()
    {
        $hospital = $this->input->post('hospital');
       // $regions = $this->input->post()
      
        $data['results'] = $this->Mymodel_model->search_hospital($hospital);
     

        $this->load->view('result_view', $data);
    }
 


function view_hospital_profile($hospital_id)
 {

  $data['specialists'] = $this->Specialist_model->get_hospital_specialists($hospital_id);
  $data['services'] = $this->Service_model->get_hospital_services($hospital_id); 


  $this->load->view('hospital_info/profile', $data);

 }

}
?>