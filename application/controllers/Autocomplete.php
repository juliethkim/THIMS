
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autocomplete extends CI_Controller {
 
 function index()
 {
  $this->load->view('home_page') ;
 }
 function fetch()
 {
  $this->load->model('Autocomplete_model');
  echo $this->Autocomplete_model->fetch_data($this->uri->segment(3));
 }
}
?>