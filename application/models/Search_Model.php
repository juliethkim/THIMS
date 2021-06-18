<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search_Model extends CI_Model {
public function GetSearchdata()
  {
    $this->db->select("*"); 


$this->db->select('region_name')
     ->from('regions as t1')
     ->where('t1.region_id', $region_id)
     ->join('provider_type as t2', 't1.region_id = t2.provider_id', 'LEFT')
     ->get();





    /*$this->db->like('region_name',$this->input->get('search'));
    $query = $this->db->get("region_name"); 
    return $query->result();*/
  }
}