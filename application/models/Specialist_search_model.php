<?php
Class Specialist_search_model Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    // function search_specialist($specialist)
    // {

    //     $this->db->like('specialist_name',$specialist);
    //  // $this->db->like('region_name', $regions);
    //     $query = $this->db->get('specialists');
     
    //     //join $query = $this ->db->get('services')
    //     return $query->result();
    // }

   function search_specialist($specialist)
    {

$this->db->select("a.specialist_name, b.specialization, c.name");
    $this->db->from("specialists as a");
    $this->db->join('tbl_specialization as b', 'a.specialization_id = b.id');
    $this->db->join('hospital_info as c', 'a.hospital_id = c.id'); 
   // $this->db->join('regions as d', 'a.region_id = d.region_id');         
       // join $query = $this ->db->get('services')
        //return $query->result();
    $query = $this->db->get();
      $result = $query->result_array();
    return $result;
    }



} 
?>