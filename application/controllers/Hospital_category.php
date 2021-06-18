<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Hospital_category extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Hospital_category_model');
    } 

    /*
     * Listing of hospital_category
     */
    function index()
    {
        $data['hospital_category'] = $this->Hospital_category_model->get_all_hospital_category();
        
        $data['_view'] = 'hospital_category/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new hospital_category
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'category' => $this->input->post('category'),
            );
            
            $hospital_category_id = $this->Hospital_category_model->add_hospital_category($params);
            redirect('hospital_category/index');
        }
        else
        {            
            $data['_view'] = 'hospital_category/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a hospital_category
     */
    function edit($category_id)
    {   
        // check if the hospital_category exists before trying to edit it
        $data['hospital_category'] = $this->Hospital_category_model->get_hospital_category($id);
        
        if(isset($data['hospital_category']['category_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'category' => $this->input->post('category'),
                );

                $this->Hospital_category_model->update_hospital_category($category_id,$params);            
                redirect('hospital_category/index');
            }
            else
            {
                $data['_view'] = 'hospital_category/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The hospital_category you are trying to edit does not exist.');
    } 

    /*
     * Deleting hospital_category
     */
    function remove($category_id)
    {
        $hospital_category = $this->Hospital_category_model->get_hospital_category($category_id);

        // check if the hospital_category exists before trying to delete it
        if(isset($hospital_category['category_id']))
        {
            $this->Hospital_category_model->delete_hospital_category($category_id);
            redirect('hospital_category/index');
        }
        else
            show_error('The hospital_category you are trying to delete does not exist.');
    }
    
}
