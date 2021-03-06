<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Ci_session extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ci_session_model');
    } 

    /*
     * Listing of ci_sessions
     */
    function index()
    {
        $data['ci_sessions'] = $this->Ci_session_model->get_all_ci_sessions();
        
        $data['_view'] = 'ci_session/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new ci_session
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'ip_address' => $this->input->post('ip_address'),
				'user_agent' => $this->input->post('user_agent'),
				'last_activity' => $this->input->post('last_activity'),
				'user_data' => $this->input->post('user_data'),
            );
            
            $ci_session_id = $this->Ci_session_model->add_ci_session($params);
            redirect('ci_session/index');
        }
        else
        {            
            $data['_view'] = 'ci_session/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a ci_session
     */
    function edit($session_id)
    {   
        // check if the ci_session exists before trying to edit it
        $data['ci_session'] = $this->Ci_session_model->get_ci_session($session_id);
        
        if(isset($data['ci_session']['session_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'ip_address' => $this->input->post('ip_address'),
					'user_agent' => $this->input->post('user_agent'),
					'last_activity' => $this->input->post('last_activity'),
					'user_data' => $this->input->post('user_data'),
                );

                $this->Ci_session_model->update_ci_session($session_id,$params);            
                redirect('ci_session/index');
            }
            else
            {
                $data['_view'] = 'ci_session/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The ci_session you are trying to edit does not exist.');
    } 

    /*
     * Deleting ci_session
     */
    function remove($session_id)
    {
        $ci_session = $this->Ci_session_model->get_ci_session($session_id);

        // check if the ci_session exists before trying to delete it
        if(isset($ci_session['session_id']))
        {
            $this->Ci_session_model->delete_ci_session($session_id);
            redirect('ci_session/index');
        }
        else
            show_error('The ci_session you are trying to delete does not exist.');
    }
    
}
