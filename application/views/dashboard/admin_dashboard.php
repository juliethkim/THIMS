<?php
	$ci = &get_instance();
	$ci->load->model('User_model');
    $ci->load->model('Hospital_info_model');

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <h3><?php echo $ci->Hospital_info_model->count_hospitals();?></h3>
                  <p>Total Hospitals</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                 <a href="<?php echo base_url(); ?>hospital_info/index" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <h3><?php echo $ci->User_model->count_users();?></h3>
                  <p>Total Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url(); ?>userListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
    </section>
</div>