<?php 
	if($role == 1 )
      {
	$this->load->view('dashboard/admin_dashboard'); 
	  }
	if($role == 2)
      {
	$this->load->view('dashboard/hospital_admin_dashboard'); 
	  }
	if($role == 3 )
      {
	$this->load->view('dashboard/specialist_dashboard'); 
	  }
	?>