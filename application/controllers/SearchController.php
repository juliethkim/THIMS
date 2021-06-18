<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Searchcontroller extends CI_Controller {
  public function searchfunction()
    {
      $data['searchdata']=$this->Search_Model->GetSearchdata();
      $this->load->view('search',$data);
    }
}