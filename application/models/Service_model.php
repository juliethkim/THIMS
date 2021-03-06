<?php

class Service_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


//fetch data from db to form


 function fetch_tbl_service_category()
 {
  $this->db->order_by("service_category", "ASC");
  $query = $this->db->get("tbl_service_category");
  return $query->result();
 }


 function fetch_tbl_service_name()
 {
  $this->db->order_by("service_name", "ASC");
  $query = $this->db->get("tbl_service_name");
  return $query->result();
 }


    function get_service($id)
    {
        return $this->db->get_where('services',array('id'=>$id))->row_array();
    }



     function get_category($category)
    {
        return $this->db->get_where('tbl_service_category',array('service_category'=>$category))->row_array();
    }

     function get_service_name($name)
    {
        return $this->db->get_where('tbl_service_name',array('service_name'=>$name))->row_array();
    }


        
    /*
     * Get all services
     */
    function get_all_services()
    {
        $this->db->order_by('id', 'asc');
    
$this->db->select("a.id, b.service_category, c.service_name, d.name");
    $this->db->from("services as a");
    $this->db->join('tbl_service_category as b', 'a.service_category_id = b.id');
    $this->db->join('tbl_service_name as c', 'a.service_name_id = c.id');
    $this->db->join('hospital_info as d', 'a.hospital_id = d.id');
   
         return $this->db->get('services')->result_array();
           $query = $this->db->get('services');
        $result = $query->result();

        $cat_id = array('-CHOOSE-');
        $cat_name = array('-CHOOSE-');
        
        for ($i = 0; $i < count($result); $i++)
             {
            array_push($cat_id, $result[$i]->id);
            array_push($cat_name, $result[$i]->service_name);
        }
        return array_combine($cat_id, $cat_name);



          }


    function get_hospital_services($hospital_id)
    {
        $this->db->order_by('id', 'asc');
    
$this->db->select("a.id, b.service_category, c.service_name, d.name");
    $this->db->from("services as a");
    $this->db->where("a.hospital_id",$hospital_id);
    $this->db->join('tbl_service_category as b', 'a.service_category_id = b.id');
    $this->db->join('tbl_service_name as c', 'a.service_name_id = c.id');
    $this->db->join('hospital_info as d', 'a.hospital_id = d.id');
   
         return $this->db->get('services')->result_array();
          }

    
//Getting services belonging to a specific hospital
      function get_services_byId($id)
    {
        $this->db->order_by('id', 'asc');
    
$this->db->select("a.id, b.service_category, c.service_name, d.name");
    $this->db->from("services as a");
    $this->db->join('tbl_service_category as b', 'a.service_category_id = b.id');
    $this->db->join('tbl_service_name as c', 'a.service_name_id = c.id');
    $this->db->join('hospital_info as d', 'a.hospital_id = d.id');
    $this->db->join('hospital_admin as e', 'a.hospital_id = d.id');
   
         return $this->db->get('services')->result_array();
          }
        

           function count_services()
    {
        $this->db->from('services');
        return $this->db->count_all_results();
    }

    /*
     * function to add new service
     */
    function add_service($params)
    {
        $this->db->insert('services',$params);
        //$this->session_commit('services', $params);
        return $this->db->insert_id();
    }


    function update_service($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('services',$params);
    }
    
    /*
     * function to delete service
     */
    function delete_service($id)
    {
        return $this->db->delete('services',array('id'=>$id));
    }
}
