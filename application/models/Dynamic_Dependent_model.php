<?php
/**
 * 
 */
/*class Dynamic_Dependent_model extends CI_Model
{
	
	function fetch_regions()
	{
		$this->db->order_by('region_name', 'ASC');
		$query=$this->db->get('regions');
		return $query->result();
	}



function fetch_category()
  {
    $this->db->order_by('category', 'ASC');
    $query=$this->db->get('hospital_category');
    return $query->result();
  }

  function fetch_hospital_ownership()
  {
    $this->db->order_by('type', 'ASC');
    $query=$this->db->get('hospital_ownership');
    return $query->result();
  }


	 function fetch_hospital_info($region_id, $category_id, $ownership_id)
 {
  $this->db->where('region_id', $region_id, 'category_id', $category_id, 'ownership_id', $ownership_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('hospital_info');
  $output = '<option value="">Select Hospital</option>';
  $output1 = '<option value="">Select Hospital</option>';
   $output2 = '<option value="">Select Hospital</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
    $output1 .= '<option value="'.$row->id.'">'.$row->name.'</option>';
    $output2 .= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
  return $output1;
  return $output2;
 }




/*function fetch_category()
	{
		$this->db->order_by('category', 'ASC');
		$query=$this->db->get('hospital_category');
		return $query->result();
	}


     function fetch_hospital_info1($category_id)
 {
  $this->db->where('category_id', $category_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('hospital_info');
  $output = '<option value="">Select Category</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
 }*/

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



class Dynamic_dependent_model extends CI_Model
{
 function fetch_regions()
 {
  $this->db->order_by("region_name", "ASC");
  $query = $this->db->get("regions");
  return $query->result();
 }

 function fetch_hospital_ownership()
 {
   $this->db->order_by("ownership_type", "ASC");
  $query = $this->db->get("hospital_ownership");
  return $query->result();
}

 function fetch_hospital_category()
 {
   $this->db->order_by("category", "ASC");
  $query = $this->db->get("hospital_category");
  return $query->result();
}



  /*$this->db->where('region_id', $region_id);
  $this->db->order_by('type', 'ASC');
  $query = $this->db->get('hospital_ownership');
  $output = '<option value="">Select Ownership</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->ownership_id.'">'.$row->type.'</option>';
  }
  return $output;*/
 

 /*function fetch_hospital_category($ownership_id)
 {
  $this->db->where('ownership_id', $ownership_id);
  $this->db->order_by('category', 'ASC');
  $query = $this->db->get('hospital_category');
  $output = '<option value="">Select Category</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->category_id.'">'.$row->category.'</option>';
  }
  return $output;
 }*/
}

?>


