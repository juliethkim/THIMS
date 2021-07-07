<?php

class Dynamic_dependent_model extends CI_Model
{
 function fetch_regions()
 {
  $this->db->order_by("region_name", "ASC");
  $query = $this->db->get("regions");
  return $query->result();
 }

 function fetch_hospital_ownership()
 {
   $this->db->order_by("ownership_type", "ASC");
  $query = $this->db->get("hospital_ownership");
  return $query->result();
}

 function fetch_hospital_category()
 {
   $this->db->order_by("category", "ASC");
  $query = $this->db->get("hospital_category");
  return $query->result();
}


}

?>


