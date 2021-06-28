
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 */
class Hospital extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hospital_model');
       
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'THIMS : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function hospitalListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->hospital_model->hospitalListingCount($searchText);

			$returns = $this->paginationCompress ( "hospitalListing/", $count, 10 );
            
            $data['hospitalRecords'] = $this->hospital_model->hospitalListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'THIMS : Hospital Listing';
            
            $this->loadViews("hospitals/addNew", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('hospital_model');
            //$data['roles'] = $this->user_model->getUserRoles();
            
            $this->global['pageTitle'] = 'THIMS : Add New Hospital';

            $this->loadViews("hospitals/addNew", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to check whether email already exist or not
     */
   /* function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    
    /**
     * This function is used to add new user to the system
     */
    function addNewHospital()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Hospital Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('category','Hospital Category','trim|required|max_length[128]');
            $this->form_validation->set_rules('ownership','Hospital Ownership','required|max_length[20]');
            $this->form_validation->set_rules('region','Region','trim|required|max_length[20]');
            $this->form_validation->set_rules('district','District','trim|required|max_length[100]');
           //$this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
               // $upload_image = $this->upload_image();
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('name'))));
                $category = strtolower($this->security->xss_clean($this->input->post('category')));
                $ownership = $this->input->post('ownership');
                $region = $this->input->post('region');
                $district = $this->security->xss_clean($this->input->post('district'));
                
               // $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId, 'name'=> $name,
                                 //   'mobile'=>$mobile, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
                
                $this->load->model('hospital_model');
                $result = $this->hospital_model->addNewHospital($hospitalInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Hospital added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Hospital addition failed');
                }
                
                redirect('hospital_info/add');
            }
        }
    }

    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($Id = NULL)
    {
        if($this->isAdmin() == TRUE || $userId == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($userId == null)
            {
                redirect('hospitalListing');
            }
            
           // $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->hospital_model->getHospitalInfo($id);
            
            $this->global['pageTitle'] = 'THIMS : Edit Hospital';
            
            $this->loadViews("editOld", $this->global, $data, NULL);
        }
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editHospital()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $userId = $this->input->post('Hospital_Id');
            
             
            $this->form_validation->set_rules('name','Hospital Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('category','Hospital Category','trim|required|max_length[128]');
            $this->form_validation->set_rules('ownership','Hospital Ownership','required|max_length[20]');
            $this->form_validation->set_rules('region','Region','trim|required|max_length[20]');
            $this->form_validation->set_rules('district','District','trim|required|max_length[100]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($hospital_Id);
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('name'))));
                $category = strtolower($this->security->xss_clean($this->input->post('category')));
                $ownership = $this->input->post('ownership');
                $region= $this->input->post('region');
                $district = $this->security->xss_clean($this->input->post('district'));
                
                $hospitalInfo = array();
                
              /*  if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name,
                                    'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                }*/
                
                $result = $this->hospital_model->editHospital($hospitalInfo, $hospital_Id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Hospital updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Hospital updation failed');
                }
                
                redirect('hospitalListing');
            }
        }
    }


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteHospital()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $userId = $this->input->post('hospital_Id');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->hospital_model->deleteHospital($hospital_Id, $hospitalInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'THIMS : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    /**
     * This function used to show login history
     * @param number $userId : This is user id
     */
   /* function loginHistoy($userId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $userId = ($userId == NULL ? 0 : $userId);

            $searchText = $this->input->post('searchText');
            $fromDate = $this->input->post('fromDate');
            $toDate = $this->input->post('toDate');

            $data["userInfo"] = $this->user_model->getUserInfoById($userId);

            $data['searchText'] = $searchText;
            $data['fromDate'] = $fromDate;
            $data['toDate'] = $toDate;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->loginHistoryCount($userId, $searchText, $fromDate, $toDate);

            $returns = $this->paginationCompress ( "login-history/".$userId."/", $count, 10, 3);

            $data['userRecords'] = $this->user_model->loginHistory($userId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'THIMS : User Login History';
            
            $this->loadViews("loginHistory", $this->global, $data, NULL);
        }        
    }

    /**
     * This function is used to show users profile
     */
   /* function profile($active = "details")
    {
        $data["hospitalInfo"] = $this->hospital_model->getHospitalInfoWithRole($this->vendorId);
        $data["active"] = $active;
        
        $this->global['pageTitle'] = $active == "details" ? 'THIMS : My Profile' : 'THIMS : Change Password';
        $this->loadViews("profile", $this->global, $data, NULL);
    }

    /**
     * This function is used to update the user details
     * @param text $active : This is flag to set the active tab
     */
  /*  function profileUpdate($active = "details")
    {
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
        $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]|callback_emailExists');        
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile($active);
        }
        else
        {
            $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
            $mobile = $this->security->xss_clean($this->input->post('mobile'));
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            
            $userInfo = array('name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->editUser($userInfo, $this->vendorId);
            
            if($result == true)
            {
                $this->session->set_userdata('name', $name);
                $this->session->set_flashdata('success', 'Profile updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Profile updation failed');
            }

            redirect('profile/'.$active);
        }
    }

    /*
* This function is invoked from another function to upload the image into the assets folder
* and returns the image path
*/
   /* public function upload_image()
    {
        // assets/images/user_image
        $config['upload_path'] = 'assets/images/user_image';
        $config['file_name'] =  uniqid();
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';

        // $config['max_width']  = '1024';s
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('user_image'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['user_image']['name']);
            $type = $type[count($type) - 1];

            $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;
        }
    }

    /**
     * This function is used to change the password of the user
     * @param text $active : This is flag to set the active tab
     */
   /* function changePassword($active = "changepass")
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile($active);
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password is not correct');
                redirect('profile/'.$active);
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
                redirect('profile/'.$active);
            }
        }
    }

	
    /**
     * This function is used to check whether email already exist or not
     * @param {string} $email : This is users email
     */
  /*  function emailExists($email)
    {
        $userId = $this->vendorId;
        $return = false;

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ $return = true; }
        else {
            $this->form_validation->set_message('emailExists', 'The {field} already taken');
            $return = false;
        }

        return $return;
    }*/
}

?>