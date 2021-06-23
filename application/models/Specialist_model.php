<?php


 
class Specialist_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get specialist by id
     */
    function get_specialist($id)
    {
        return $this->db->get_where('specialists',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all specialists
     */
    function get_all_specialists()
    {
        $this->db->order_by('id', 'asc');
        return $this->db->get('specialists')->result_array();

          $query = $this->db->get('specialists');
        $result = $query->result();

        $cat_id = array('-CHOOSE-');
        $cat_name = array('-CHOOSE-');
        
        for ($i = 0; $i < count($result); $i++)
             {
            array_push($cat_id, $result[$i]->id);
            array_push($cat_name, $result[$i]->specialist_name);
        }
        return array_combine($cat_id, $cat_name);
    }

    function fetch_tbl_specialization()
 {
  $this->db->order_by("specialization", "ASC");
  $query = $this->db->get("tbl_specialization");
  return $query->result();
 }

    /* function get_tbl_specialization()
    {
        $query = $this->db->get('tbl_specialization');
        $result = $query->result();

        $cat_id = array('-CHOOSE-');
        $cat_name = array('-CHOOSE-');
        
        for ($i = 0; $i < count($result); $i++)
        {
            array_push($cat_id, $result[$i]->id);
            array_push($cat_name, $result[$i]->specialization);
        }
        return array_combine($cat_id, $cat_name);
    }*/





        
    /*
     * function to add new specialist
     */

    function add_specialist($params)
    {
        $this->db->insert('specialists',$params);
        return $this->db->insert_id();
    }
    
    
    /*
     * function to update specialist
     */
    function update_specialist($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('specialists',$params);
    }
    
    /*
     * function to delete specialist
     */
    function delete_specialist($id)
    {
        return $this->db->delete('specialists',array('id'=>$id));
    }

}
