
<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Specialist extends BaseController{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Specialist_model');
        $this->load->model('user_model');
        $this->load->database();
        $this->isLoggedIn();
    } 

    /*
     * Listing of specialists
     */


  function index()
    {
        $data['specialists'] = $this->Specialist_model->get_all_specialists();
         $this->global['pageTitle'] = 'THIMS : Dashboard';
        $this->loadViews("specialist/index", $this->global,    $data , NULL);
        //$data['specialists'] = $this->Specialist_model->get_tbl_specialization();
       // $this->form_validation->set_rules('specialization_id', 'specialization', 'callback_validate_dropdown|required');
       
        //$this->form_validation->set_rules('specialist_name', 'specialist_name', 'trim|required|max_length[128]');
        

       // if ($this->form_validation->run() == FALSE)
       /// {
            // failed validation
           // $this->load->view('specialist/add', $data);
       // }
       // else
       // {
            // here goes your code to insert into db
           // echo "Specialist addition failed";
        }
    }
    
    /*function validate_dropdown($str)
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
    }*/




/*
    function index()
    {
        $data['specialists'] = $this->Specialist_model->get_all_specialists();
             $this->form_validation->set_rules('category', 'Category', 'callback_validate_dropdown');
        $this->global['pageTitle'] = 'THIMS : Dashboard';
		$this->loadViews("specialist/index", $this->global, 	$data , NULL);
    }*/

    /*
     * Adding a new specialist
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'specialist_name' => $this->input->post('specialist_name'),
                'specialization' => $this->input->post('specialization_id'),
            );

     
            
           $this->Specialist_model->add_specialist($params);
            redirect('specialist/add');
        }
        else
        {      
            $this->load->model('Specialist_Model');
			$data['all_specialists'] = $this->Specialist_Model->get_all_specialists();      
            $this->global['pageTitle'] = 'THIMS : Dashboard';
            $this->loadViews("specialist/add", $this->global, 	$data , NULL);
        }
    }  

    /*
     * Editing a specialist
     */
    function edit($id)
    {   
        // check if the specialist exists before trying to edit it
        $data['specialist'] = $this->Specialist_model->get_specialist($id);
        
        if(isset($data['specialist']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'specialist_name' => $this->input->post('specialist_name'),
                
                    'specialization' => $this->input->post('specialization'),
                );

                $this->Specialist_model->update_specialist($id,$params);            
                redirect('specialist/index');
            }
            else
            {
                $this->global['pageTitle'] = 'THIMS : Dashboard';
                $this->loadViews("specialist/index", $this->global, 	$data , NULL);
            }
        }
        else
            show_error('The specialist you are trying to edit does not exist.');
    } 

    /*
     * Deleting specialist
     */
    function remove($id)
    {
        $specialist = $this->Specialist_model->get_specialist($id);

        // check if the specialist exists before trying to delete it
        if(isset($specialist['id']))
        {
            $this->Specialist_model->delete_specialist($id);
            redirect('specialist/index');
        }
        else
            show_error('The specialist you are trying to delete does not exist.');
    }
    


