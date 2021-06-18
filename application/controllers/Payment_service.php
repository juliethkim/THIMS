<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
 
class Payment_service extends BaseController{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_service_model');
        $this->load->model('user_model');
        $this->isLoggedIn(); 
    } 

    /*
     * Listing of payment_service
     */
    function index()
    {
        $data['payment_service'] = $this->Payment_service_model->get_all_payment_service();
        
        $this->global['pageTitle'] = 'THIMS : Dashboard';
		$this->loadViews("payment_service/index", $this->global, 	$data , NULL);

    }

    /*
     * Adding a new payment_service
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'payment_type' => $this->input->post('payment_type'),
            );
            
            $payment_service_id = $this->Payment_service_model->add_payment_service($params);
            redirect('payment_service/index');
        }
        else
        {  
            $this->load->model('Payment_service_model');
            $data['all_payment_service'] = $this->Payment_service_model->get_all_payment_service();
                      
            $this->global['pageTitle'] = 'THIMS : Dashboard';
            $this->loadViews("payment_service/add", $this->global, 	$data , NULL);
    
        }
    }  

    /*
     * Editing a payment_service
     */
    function edit($id)
    {   
        // check if the payment_service exists before trying to edit it
        $data['payment_service'] = $this->Payment_service_model->get_payment_service($id);
        
        if(isset($data['payment_service']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'payment_type' => $this->input->post('payment_type'),
                );

                $this->Payment_service_model->update_payment_service($id,$params);            
                redirect('payment_service/index');
            }
            else
            {
                $this->load->model('Payment_service_model');
                $data['all_payment_service'] = $this->Payment_service_model->get_all_payment_service();
                
                $this->global['pageTitle'] = 'THIMS : Dashboard';
                $this->loadViews("payment_service/index", $this->global, 	$data , NULL);
        
            }
        }
        else
            show_error('The payment_service you are trying to edit does not exist.');
    } 

    /*
     * Deleting payment_service
     */
    function remove($id)
    {
        $payment_service = $this->Payment_service_model->get_payment_service($id);

        // check if the payment_service exists before trying to delete it
        if(isset($payment_service['id']))
        {
            $this->Payment_service_model->delete_payment_service($id);
            redirect('payment_service/index');
        }
        else
            show_error('The payment_service you are trying to delete does not exist.');
    }
    
}
