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


function profile()
    {
        $data['hospital_info'] = $this->Hospital_info_model->get_all_hospital_info();
        
        $this->global['pageTitle'] = 'THIMS : Dashboard';
        $this->loadViews("hospital_info/profile", $this->global,  $data , NULL);

    }


//Adding a function to print pdf report
 function PDF2()
 {
   
     $this->global['pageTitle'] = 'THIMS : Dashboard';
      $data['hospital_info'] = $this->Hospital_info_model->get_all_hospital_info(); 
        $this->load->library('Pdf');
        // $html = $this->load->view('service/index', [], true, $this->global, $data, NULL);
        $html = $this->loadViews('hospital_info/index', [], true, $this->global, $data, NULL);
        $this->pdf->createPDF($html, 'hospitalsPdf', false);
 }


function add()
    {
            
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
                $data['hospital_map'] = $this->Hospital_info_model->get_hospital_map_link($id);
                
                $this->load->model('Hospital_info_model');
                $result = $this->Hospital_info_model->addNewHospital($hospitalInfo)->vendorId;
         }

           $this->loadViews("hospital_info/add", $this->global,  $data , NULL);
    }


      function getadminhospital($admin_id)
    {
        $this->db->select('hospital_id');
        $this->db->from('hospital_admin');
        $this->db->where('admin_id', $admin_id);
        $query = $this->db->get();
        
        return $query->row();
    }

}
