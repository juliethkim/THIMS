<?php
Class HospitalInfo_model Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search_hospitalInfo($hospitalInfo)
    {

$this->db->select("a.name, b.category, c.ownership_type, d.region_name");
    $this->db->from("hospital_info as a");
    $this->db->join('hospital_category as b', 'a.category_id = b.category_id');
    $this->db->join('hospital_ownership as c', 'a.ownership_id = c.ownership_id'); 
    $this->db->join('regions as d', 'a.region_id = d.region_id');         
       // join $query = $this ->db->get('services')
        //return $query->result();
    $query = $this->db->get();
      $result = $query->result_array();
    return $result;
    }



} 
?>