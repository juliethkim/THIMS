<?php
/**
 * 
 */
class Dynamic_Dependent_model extends CI_Model
{
	
	function fetch_regions()
	{
		$this->db->order_by('region_name', 'ASC');
		$query=$this->db->get('regions');
		return $query->result();
	}


	 function fetch_hospital_info($region_id)
 {
  $this->db->where('region_id', $region_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('hospital_info');
  $output = '<option value="">Select Hospital</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
 }


/* function fetch_tbl_specialization($hospital_id)
 {
  $this->db->where('hospital_id', $hospital_id);
  $this->db->order_by('specialization', 'ASC');
  $query = $this->db->get('tbl_specialization');
  $output = '<option value="">Select Specialization</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->specialization.'</option>';
  }
  return $output;
 }*/

}
?>