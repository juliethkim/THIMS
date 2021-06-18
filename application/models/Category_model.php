<?php
class Category_model extends CI_Model
{
 function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("hospital_category");
  if($query != '')
  {
   $this->db->like('hospital_category', $query);
  }
  $this->db->order_by('category_id', 'DESC');
  return $this->db->get();
 }
}
?>
