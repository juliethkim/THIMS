<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Service_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get service by id
     */
    function get_service($id)
    {
        return $this->db->get_where('services',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all services
     */
    function get_all_services()
    {
        $this->db->order_by('id', 'desc');
        join('tbl_service_name')
        join('tbl_service_category')
        return $this->db->get('services')->result_array();


   ->from('table1 as t1')
     ->where('t1.id', $id)
     ->join('table2 as t2', 't1.id = t2.id', 'LEFT')
     ->join('table3 as t3', 't1.id = t3.id', 'LEFT')
     ->get();   ->from('table1 as t1')
     ->where('t1.id', $id)
     ->join('table2 as t2', 't1.id = t2.id', 'LEFT')
     ->join('table3 as t3', 't1.id = t3.id', 'LEFT')
     ->get();
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
    
        
    /*
     * function to add new service
     */
    function add_service($params)
    {
        $this->db->insert('services',$params);
        return $this->db->insert_id();
    }
    



    /* function get_tbl_service_name()
    {
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
    /*
     * function to update service
     */
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