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
    }

    function search_hospital()
    {
        $hospital = $this->input->post('hospital');
       // $regions = $this->input->post()
      
        $data['results'] = $this->Mymodel_model->search_hospital($hospital);
     

        $this->load->view('result_view', $data);
    }
 


function view_hospital_profile()
    {
        $hospital_profile = $this->input->post('hospital_profile');
       // $regions = $this->input->post()
      
        $data['results'] = $this->Mymodel_model->view_hospital_profile($hospital_profile);
     

        $this->load->view('hospital_profile', $data);
    }
 

}
?>