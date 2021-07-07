<?php
Class Service_search_model Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


   function search_service($service)
    {

$this->db->select("a.id, b.service_category, c.service_name, d.name");
    $this->db->from("services as a");
    $this->db->join('tbl_service_category as b', 'a.service_category_id = b.id');
    $this->db->join('tbl_service_name as c', 'a.service_name_id = c.id'); 
     $this->db->join('hospital_info as d', 'a.hospital_id = d.id'); 
  
    $query = $this->db->get();
      $result = $query->result_array();
    return $result;
    }


} 
?>