
<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
 
  
class Hello extends CI_Controller {  
  
    public function newFunction()  
    {  
        $this->load->view('hello_world');  
    }  
}  
?> 