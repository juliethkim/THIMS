<?php
class Autocomplete_model extends CI_Model
{
 function fetch_data($query)
 {
  $this->db->like('name', $query);
  $query = $this->db->get('tbl_students');
  if($query->num_rows() > 0)
  {
   foreach($query->result_array() as $row)
   {
    $output[] = array(
     'name'  => $row["student_name"],
    );
   }
   echo json_encode($output);
  }
 }
}

?>

