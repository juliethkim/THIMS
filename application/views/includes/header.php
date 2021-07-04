<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?php echo "THIMS"; ?></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css') ?>">
      <!-- Morris chart -->
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/morris.js/morris.css') ?>">
      <!-- jvectormap -->
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/jvectormap/jquery-jvectormap.css') ?>">
      <!-- Date Picker -->
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
            
      <!-- Select2 -->
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/select2/dist/css/select2.min.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fileinput/fileinput.min.css') ?>">
      <!-- Custom css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">

      <!-- icheck -->
      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/all.css') ?>">

      <!-- DataTables -->
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net/css/jquery.dataTables.min.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net/css/responsive.dataTables.min.css') ?>">

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" >
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

      <!-- jQuery 3 -->
      <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert.css') ?>">
      <script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>


      <!-- jQuery UI 1.11.4 -->
      <script src="<?php echo base_url('assets/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
          $.widget.bridge('uibutton', $.ui.button);
      </script>
      <!-- Bootstrap 3.3.7 -->
      <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
      <!-- Morris.js charts -->
      <script src="<?php echo base_url('assets/bower_components/raphael/raphael.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/bower_components/morris.js/morris.min.js') ?>"></script>
      <!-- Sparkline -->
      <script src="<?php echo base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>
      <!-- jvectormap -->
      <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
      <!-- jQuery Knob Chart -->
      <script src="<?php echo base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js') ?>"></script>
      <!-- daterangepicker -->
      <script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
      <!-- datepicker -->
      <script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
      <!-- Slimscroll -->
      <script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
      <!-- FastClick -->
      <script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js') ?>"></script>
      <!-- Select2 -->
      <script src="<?php echo base_url('assets/bower_components/select2/dist/js/select2.full.min.js') ?>"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="<?php echo base_url('assets/dist/js/pages/dashboard.js') ?>"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?php echo base_url('assets/dist/js/demo.js') ?>"></script>
      <script src="<?php echo base_url('assets/plugins/fileinput/fileinput.min.js') ?>"></script>

      <!-- ChartJS -->
      <script src="<?php echo base_url('assets/bower_components/Chart.js/Chart.js') ?>"></script>

      <!-- icheck -->
      <script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js') ?>"></script>

      <!-- DataTables -->
      <script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/bower_components/datatables.net/js/dataTables.responsive.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>

       <script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/multiple-select.js') ?>"></script>

      <!-- Leaflet styles -->
      <link href="<?php echo base_url(); ?>assets/css/leaflet-search.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(); ?>assets/css/leaflet.css" rel="stylesheet" type="text/css" />

      <!-- scripts for Leaflet -->
	<script src="<?php echo base_url(); ?>assets/js/leaflet.js"></script>	
	<script src="<?php echo base_url(); ?>assets/js/TileLayer.Common.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/leaflet-search.js"></script>

   

    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->

          <span class="logo-mini"><b>THI</b>MS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>THIMS</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <i class="fa fa-history"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"> Last Login : <i class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?></li>
                </ul>
              </li>
			                <!-- This is for retrieving user profile photo named after user name and extension to be png -->
			  <?php
			  
					$imagepath = "/assets/dist/img/";  
					$ext = '.png';
					if (!file_exists(base_url() . $imagepath . strtolower(strtok($name," ")) . $ext)) 
					{
					$imagename = 'avatar';
					}else{
					$imagename = $name;
					}
				?>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url() . $imagepath . strtolower(strtok($imagename," ")) . $ext; ?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <img src="<?php echo base_url() . $imagepath . strtolower(strtok($imagename," ")) . $ext; ?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                    
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>profile" class="btn btn-warning btn-flat"><i class="fa fa-user-circle"></i> Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Log out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
<?php 
	if($role == 1 )
      {
	$this->load->view('includes/admin_sidebar'); 
	  }
	if($role == 2)
      {
	$this->load->view('includes/hospital_admin_sidebar'); 
	  }
    if($role == 3)
    {
$this->load->view('includes/specialist_sidebar'); 
  }
	?>
          <!-- /.sidebar -->
      </aside>

