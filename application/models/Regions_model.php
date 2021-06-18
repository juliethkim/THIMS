<?php
class Regions_model extends CI_Model
{
 function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("regions");
  if($query != '')
  {
   $this->db->like('region_name', $query);
  }
  $this->db->order_by('region_id', 'DESC');
  return $this->db->get();
 }
}
?>
