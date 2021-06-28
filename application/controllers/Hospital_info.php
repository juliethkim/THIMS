<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Hospital_info extends BaseController{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Hospital_info_model');
        $this->load->model('Hospital_ownership_model');
        $this->load->model('Hospital_category_model');
        $this->load->database();
        $this->isLoggedIn(); 
    } 

    /*
     * Listing of hospital_info
     */
   function index()
    {
        $data['hospital_info'] = $this->Hospital_info_model->get_all_hospital_info();
        
        $this->global['pageTitle'] = 'THIMS : Dashboard';
		$this->loadViews("hospital_info/index", $this->global, 	$data , NULL);

    }








function add()
    {
        // if($this->isAdmin() == TRUE)
        // {
        //     $this->loadThis();
        // }
        // else
        // {
        //     $this->load->model('Hospital_info_model');
            // $data['roles'] = $this->user_model->getUserRoles();

            //  $this->load->model('User_model');
            // $data['regions'] = $this->user_model->getRegions();
            
            $data['roles'] = '';

            $this->global['pageTitle'] = 'THIMS : Add New Hospital';
             $data['hospital_category'] = $this->Hospital_info_model->get_hospital_category();
        $data['hospital_ownership'] = $this->Hospital_info_model->get_hospital_ownership();
        $data['regions'] = $this->Hospital_info_model->get_regions();




         if(isset($_POST) && count($_POST) > 0)     {



                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('name'))));
               
                $category = strtolower($this->security->xss_clean($this->input->post('hospital_category')));
               $ownership = strtolower($this->security->xss_clean($this->input->post('hospital_ownership')));
               $region = strtolower($this->security->xss_clean($this->input->post('regions')));
                
                $hospitalInfo = array('name'=>$name,'category_id'=> $category, 'ownership_id'=> $ownership,'region_id'=>$region);
                
                $this->load->model('Hospital_info_model');
                $result = $this->Hospital_info_model->addNewHospital($hospitalInfo);
         }

           $this->loadViews("hospital_info/add", $this->global,  $data , NULL);

        // }
    }

}
