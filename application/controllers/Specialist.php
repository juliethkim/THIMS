
<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Specialist extends BaseController{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Specialist_model');
        $this->load->model('User_model');
          $this->load->model('Dynamic_Dependent_model');
        $this->load->database();
        $this->isLoggedIn();
        // $this->load->library('calendar');
    } 


    /*
     * Listing of specialists
     */


  function index()
    {

        $hospital_id=$this->User_model->getadminhospital($this->vendorId)->hospital_id;
         $this->global['pageTitle'] = 'THIMS : Dashboard';
         $data['specialists'] = $this->Specialist_model->get_hospital_specialists($hospital_id);
         $data['tbl_specializaton'] = $this->Specialist_model->fetch_tbl_specialization();
        
        $this->loadViews('specialist/index', $this->global, $data , NULL);   
    }
    


//Adding a function to print pdf report
 function PDF1()
 {
   
     $this->global['pageTitle'] = 'THIMS : Dashboard';
      $data['specialists'] = $this->Specialist_model->get_all_specialists(); 
        $this->load->library('Pdf');
        // $html = $this->load->view('service/index', [], true, $this->global, $data, NULL);
        $html = $this->loadViews('specialist/index', [], true, $this->global, $data, NULL);
        $this->pdf->createPDF($html, 'specialistsPdf', false);
 }

    /*
     * Adding a new specialist
     */


    function add()
    {    
        $data['tbl_specialization'] = $this->Specialist_model->fetch_tbl_specialization();
        // $data['specialists'] = $this->Specialist_model->fetch_specialists();
        $data['specialists'] = $this->Specialist_model->get_all_specialists();

        

        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'specialist_name' => $this->input->post('specialist_name'),
                'specialization_id' => $this->input->post('specialization_id'),
                 // 'hospital_id' => $this->input->post('name'),
                 'hospital_id'=>$this->User_model->getadminhospital($this->vendorId)->hospital_id,
                


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
        $data['specialists'] = $this->Specialist_model->get_specialist($id);
        
        if(isset($data['specialist']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'specialist_name' => $this->input->post('specialist_name'),
                
                    'specialization' => $this->input->post('specialization_id'),
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
    
}

