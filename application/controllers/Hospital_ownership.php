<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
 
 
class Hospital_ownership extends BaseController{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Hospital_ownership_model');
        $this->load->model('user_model');
        $this->isLoggedIn();
    } 

    /*
     * Listing of hospital_ownership
     */
    function index()
    {
        $data['hospital_ownership'] = $this->Hospital_ownership_model->get_all_hospital_ownership();
        
        $this->global['pageTitle'] = 'THIMS : Dashboard';
		$this->loadViews("hospital_ownership/index", $this->global, 	$data , NULL);

    }

    /*
     * Adding a new hospital_ownership
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'type' => $this->input->post('type'),
            );
            
            $hospital_ownership_id = $this->Hospital_ownership_model->add_hospital_ownership($params);
            redirect('hospital_ownership/index');
        }
        else
        {            
            $this->global['pageTitle'] = 'THIMS : Dashboard';
            $this->loadViews("hospital_ownership/add", $this->global, 	$data , NULL);
    
        }
    }  

    /*
     * Editing a hospital_ownership
     */
    function edit($id)
    {   
        // check if the hospital_ownership exists before trying to edit it
        $data['hospital_ownership'] = $this->Hospital_ownership_model->get_hospital_ownership($id);
        
        if(isset($data['hospital_ownership']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'type' => $this->input->post('type'),
                );

                $this->Hospital_ownership_model->update_hospital_ownership($id,$params);            
                redirect('hospital_ownership/index');
            }
            else
            {
                $this->global['pageTitle'] = 'THIMS : Dashboard';
                $this->loadViews("hospital_ownership/index", $this->global, 	$data , NULL);        
            }
        }
        else
            show_error('The hospital_ownership you are trying to edit does not exist.');
    } 

    /*
     * Deleting hospital_ownership
     */
    function remove($id)
    {
        $hospital_ownership = $this->Hospital_ownership_model->get_hospital_ownership($id);

        // check if the hospital_ownership exists before trying to delete it
        if(isset($hospital_ownership['id']))
        {
            $this->Hospital_ownership_model->delete_hospital_ownership($id);
            redirect('hospital_ownership/index');
        }
        else
            show_error('The hospital_ownership you are trying to delete does not exist.');
    }
    
}
