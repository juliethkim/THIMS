<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regions extends CI_Controller {

function show_region(){
// select * from 'regions' where region_name 

//     echo json_encode("hh");

}
 function index()
 {
  $this->load->view('home_page');
 }

 function fetch()
 {
  $this->load->database();
  $output = '';
  $query = '';
  $this->load->model('Regions_model');
  if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->Regions_model->fetch_data($query);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>Region Name</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->region_name.'</td>
      </tr>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }
 
}

