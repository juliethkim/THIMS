<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
Class Specialist_search Extends CI_Controller
{
    function __Construct()
    {        
        parent::__Construct();

        $this->load->database();
        $this->load->model('Specialist_search_model');
    }

    function search_specialist()
    {
        $specialist = $this->input->post('specialist');
       // $regions = $this->input->post()
      
        $data['results'] = $this->Specialist_search_model->search_specialist($specialist);
     

        $this->load->view('specialist_view', $data);
    }


}
?>