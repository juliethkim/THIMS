<?php 
	if($role == ROLE_ADMIN )
      {
	$this->load->view('dashboard/admin_dashboard'); 
	  }
	if($role == ROLE_HOSPITAL_ADMIN)
      {
	$this->load->view('dashboard/hospital_admin_dashboard'); 
	  }
	
	?>