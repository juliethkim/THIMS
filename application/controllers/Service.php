<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Service extends BaseController{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Service_model');
        $this->load->model('User_model');
         $this->load->model('Dynamic_Dependent_model');
         $this->load->database();
        $this->isLoggedIn();

    } 


    /*
     * Listing of services
     */
    
   /* function index()
    {
        $data['services'] = $this->Service_model->get_all_services();
        $this->global['pageTitle'] = 'THIMS : Dashboard';
		$this->loadViews("service/index", $this->global, 	$data , NULL);
    }*/

function index()
 {
   
     $this->global['pageTitle'] = 'THIMS : Dashboard';
     $data['services'] = $this->Service_model->get_all_services(); 
      $this->load->library('Pdf');
        // $html = $this->load->view('service/index', [], true);
        // $this->pdf->createPDF($html, 'mypdf', false);  
  $this->loadViews('service/index', $this->global, $data , NULL);
 }


//Adding a function to print pdf report
 function PDF()
 {
   
     $this->global['pageTitle'] = 'THIMS : Dashboard';
       $data['services'] = $this->Service_model->get_all_services(); 
        $this->load->library('Pdf');
        // $html = $this->load->view('service/index', [], true, $this->global, $data, NULL);
        $html = $this->load->view('service/index', [], true, $data);
        $this->pdf->createPDF($html, 'mypdf', false);
 }




    /*
     * Adding a new service
     */
    function add()
    {  
    $data['tbl_service_category'] = $this->Service_model->fetch_tbl_service_category();
    $data['tbl_service_name'] = $this->Service_model->fetch_tbl_service_name();




        if(isset($_POST) && count($_POST) > 0)     
        {   


            $params = array(
                'service_category_id' => $this->input->post('service_category_id'),
                'service_name_id' => $this->input->post('service_name_id'),
                // 'hospital_id'=>$this->User_model->getadminhospital($this->vendorId)->hospital_id,
                'hospital_id'=>$this->User_model->getadminhospital($this->hospital_id),
                       
            );


           
            $service_id = $this->Service_model->add_service($params);
            redirect('service/add');
        }
        else
        {      
            $this->load->model('Service_Model');
			$data['all_services'] = $this->Service_Model->get_all_services();
                  
            $this->global['pageTitle'] = 'THIMS : Dashboard';
            $this->loadViews("service/add", $this->global, 	$data , NULL);
        }
    }  






    /*
     * Editing a service
     */
    function edit($id)
    {   
        // check if the service exists before trying to edit it
        $data['service'] = $this->Service_model->get_service($id);
        
        if(isset($data['service']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   


                  $params = array(
                    'service_category' => $this->input->post('service_category'),
                    'service_name' => $this->input->post('service_name'),
                );
              }
            
            else
            {
                $this->load->model('Service_Model');
                $data['all_services'] = $this->Service_Model->get_all_services();
                $this->global['pageTitle'] = 'THIMS : Dashboard';
                $this->loadViews("service/index", $this->global, 	$data , NULL);
            }
        }
        else
            show_error('The service you are trying to edit does not exist.');
    } 

    /*
     * Deleting service
     */
    function remove($id)
    {
        $service = $this->Service_model->get_service($id);

        // check if the service exists before trying to delete it
        if(isset($service['id']))
        {
            $this->Service_model->delete_service($id);
            redirect('service/index');
        }
        else
            show_error('The service you are trying to delete does not exist.');
    }
    
}
