<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Hospital_ownership_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get hospital_ownership by id
     */
    function get_hospital_ownership($id)
    {
        return $this->db->get_where('hospital_ownership',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all hospital_ownership
     */
    function get_all_hospital_ownership()
    {
        $this->db->order_by('ownership_id', 'asc');
        return $this->db->get('hospital_ownership')->result_array();
    }
        
    /*
     * function to add new hospital_ownership
     */
    function add_hospital_ownership($params)
    {
        $this->db->insert('hospital_ownership',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update hospital_ownership
     */
    function update_hospital_ownership($id,$params)
    {
        $this->db->where('ownership_id',$ownership_id);
        return $this->db->update('hospital_ownership',$params);
    }
    
    /*
     * function to delete hospital_ownership
     */
    function delete_hospital_ownership($id)
    {
        return $this->db->delete('hospital_ownership',array('ownership_id'=>$ownership_id));
    }
}
