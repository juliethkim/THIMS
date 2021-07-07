<?php
$ci = &get_instance();
$ci->load->model('Specialist_model');
$ci->load->model('Service_model');
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
              <div class="small-box">
                <div class="inner">
                    <h3><?php echo $ci->Service_model->count_services();?></h3>
                    <p>Total Services</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                  <a href="service/index" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box">
                <div class="inner">
                <h3><?php echo $ci->Specialist_model->count_specialists();?></h3>
                    <p>Registered Specialists</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                  <a href="specialist/index" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
           
            </div>

          </div>
    </section>
</div>
