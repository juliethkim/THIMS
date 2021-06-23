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







    /*
     * Adding a new hospital_info
     */



        // Codes to add category dropdown list
     /*   function index()
    {
        $data['hospital_category'] = $this->Hospital_info_model->gethospital_category();
        $this->form_validation->set_rules('bookname', 'Book Name', 'trim|required');
        $this->form_validation->set_rules('category', 'Category', 'callback_validate_dropdown');
        $this->form_validation->set_rules('author', 'Author', 'trim|required');
        $this->form_validation->set_rules('isbn', 'ISBN', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            // failed validation
            $this->load->view('demo_view', $data);
        }
        else
        {
            // here goes your code to insert into db
            echo "Hooray! Now write down your code to insert book details into database...";
        }
    }
    
    function validate_dropdown($str)
    {
        if ($str == '-CHOOSE-')
        {
            $this->form_validation->set_message('validate_dropdown', 'Please choose a valid %s');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
*/


    function add()

     {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else

        {
            $this->load->library('form_validation');
  
        $data['hospital_category'] = $this->Hospital_info_model->get_hospital_category();
        $data['hospital_ownership'] = $this->Hospital_info_model->get_hospital_ownership();
        $data['regions'] = $this->Hospital_info_model->get_regions();
		$this->form_validation->set_rules('name','Name','required|max_length[30]');
        $this->form_validation->set_rules('ownership','Ownership','required|max_length[30]');
        $this->form_validation->set_rules('category', 'Category', 'callback_validate_dropdown');
        $this->form_validation->set_rules('regions','Region','required|max_length[30]');
        $this->loadViews("hospitals/addNew", $this->global, $data , NULL);
	
         if($this->form_validation->run() == FALSE)
            {
                $this->add();
                $this->load->view('hospitals/addNew', $data);
            }

            else
            {
                $upload_image = $this->upload_image();
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('name'))));
               
                $category = strtolower($this->security->xss_clean($this->input->post('category')));
               $ownership = strtolower($this->security->xss_clean($this->input->post('ownership')));
               $region = strtolower($this->security->xss_clean($this->input->post('region')));
                
                $hospitalInfo = array('name'=>$name,'category'=> $category, 'ownership'=> $ownership,'region'=>$region, 'createdDtm'=>date('Y-m-d H:i:s'));
                
                $this->load->model('Hospital_info_model');
                $result = $this->Hospital_info_model->addNewHospital($hospitalInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Hospital added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Hospital addition failed');
                }
                
                redirect('hospitals/addNew');
            }









		
		/*if($this->form_validation->run())     
        {   
            $this->load->view('hospitals/addNew', $data);
            $params = array(
				'name' => $this->input->post('name'),
                'ownership' => $this->input->post('ownership'),
                'category' => $this->input->post('category'),
				'region' => $this->input->post('region'),

				
            );
            
            $hospital_info_id = $this->Hospital_info_model->add_hospital_info($params);
            redirect('hospitals/hospitals');
        }
        else
        {          
            $this->load->model('Hospital_category_model');
			$data['all_Hospital_category_model'] = $this->Hospital_category_model->get_all_hospital_category();
            $this->load->model('Hospital_ownership_model');
			$data['Hospital_ownership_model'] = $this->Hospital_ownership_model->get_all_hospital_ownership();              
            $this->global['pageTitle'] = 'THIMS : Dashboard';
            $this->loadViews("hospitals/addNew", $this->global, 	$data , NULL);
    
        }*/

          function validate_dropdown($str)
    {
        if ($str == '-CHOOSE-')
        {
            $this->form_validation->set_message('validate_dropdown', 'Please choose a valid %s');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}







 /*function addNewHospital()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Hospital Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('category','Category','trim|required');
            $this->form_validation->set_rules('ownership','Ownership','trim|required');
            $this->form_validation->set_rules('region','Region','trim|required');
           
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $upload_image = $this->upload_image();
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('name'))));
               
                $category = strtolower($this->security->xss_clean($this->input->post('category')));
               $ownership = strtolower($this->security->xss_clean($this->input->post('ownership')));
               $region = strtolower($this->security->xss_clean($this->input->post('region')));
                
                $hospitalInfo = array('name'=>$name,'category'=> $category, 'ownership'=> $ownership,'region'=>$region, 'createdDtm'=>date('Y-m-d H:i:s'));
                
                $this->load->model('Hospital_info_model');
                $result = $this->Hospital_info_model->addNewHospital($hospitalInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Hospital added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Hospital addition failed');
                }
                
                redirect('addNew');
            }
        }
    }*/






     

    /*
     * Editing a hospital_info
     */

    function edit($id)
    {   
        // check if the hospital_info exists before trying to edit it
        $data['hospital_info'] = $this->Hospital_info_model->get_hospital_info($id);
        
        if(isset($data['hospital_info']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','required|max_length[30]'); 
            $this->form_validation->set_rules('hospital_ownership','Ownership','required|integer');
            $this->form_validation->set_rules('hospital_category','Hospital Category','required|integer');
			$this->form_validation->set_rules('region','Region','required|max_length[30]');
	
		
		

			if($this->form_validation->run())     
            {   
                $params = array(
					
					'name' => $this->input->post('name'),
                    'hospital_ownership' => $this->input->post('hospital_ownership'),
                    'hospital_category' => $this->input->post('hospital_category'),
					'region' => $this->input->post('region'),
				
					
                );

                $this->Hospital_info_model->update_hospital_info($id,$params);            
                redirect('hospital_info/hospitalListings');
            }
            else
            {
                $this->global['pageTitle'] = 'THIMS : Dashboard';
                $this->loadViews("hospital_info/edit", $this->global, 	$data , NULL);
        
            }
        }
        else
            show_error('The hospital_info you are trying to edit does not exist.');
    } 

    /*
     * Deleting hospital_info
     */
    function remove($id)
    {
        $hospital_info = $this->Hospital_info_model->get_hospital_info($id);

        // check if the hospital_info exists before trying to delete it
        if(isset($hospital_info['id']))
        {
            $this->Hospital_info_model->delete_hospital_info($id);
            redirect('hospital_info/hospitalListings');
        }
        else
            show_error('The hospital_info you are trying to delete does not exist.');
    }
}
}
