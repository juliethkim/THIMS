<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
Class Service_search Extends CI_Controller
{
    function __Construct()
    {        
        parent::__Construct();

        $this->load->database();
        $this->load->model('Service_search_model');
    }

    function search_service()
    {
        $service = $this->input->post('service');
       // $regions = $this->input->post()
      
        $data['results'] = $this->Service_search_model->search_service($service);
     

        $this->load->view('service_view', $data);
    }


}
?>