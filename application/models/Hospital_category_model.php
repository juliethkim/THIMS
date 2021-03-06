<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Hospital_category_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get hospital_category by id
     */
    function get_hospital_category($category_id)
    {
        return $this->db->get_where('hospital_category',array('category_id'=>$category_id))->row_array();
    }
        
    /*
     * Get all hospital_category
     */
    function get_all_hospital_category()
    {
        $this->db->order_by('category_id', 'desc');
        return $this->db->get('hospital_category')->result_array();
    }
        
    /*
     * function to add new hospital_category
     */
    function add_hospital_category($params)
    {
        $this->db->insert('hospital_category',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update hospital_category
     */
    function update_hospital_category($category_id,$params)
    {
        $this->db->where('category_id',$category_id);
        return $this->db->update('hospital_category',$params);
    }
    
    /*
     * function to delete hospital_category
     */
    function delete_hospital_category($category_id)
    {
        return $this->db->delete('hospital_category',array('category_id'=>$category_id));
    }
}
