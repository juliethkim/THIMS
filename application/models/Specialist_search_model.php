<?php
Class Specialist_search_model Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search_specialist($specialist)
    {

        $this->db->like('specialist_name',$specialist);
     // $this->db->like('region_name', $regions);
        $query = $this->db->get('specialists');
     
        //join $query = $this ->db->get('services')
        return $query->result();
    }




} 
?>