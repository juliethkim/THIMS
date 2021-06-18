        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Manage Hospitals</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>hospital_info/add"><i class="fa fa-circle-o"></i>Add Hospital</a></li>
                <li><a href="<?php echo base_url(); ?>hospital_info/index"><i class="fa fa-circle-o"></i> View Hospitals</a></li>
              </ul>
            </li>
            <!--<li>
              <a href="<?php echo base_url(); ?>service/index" >
                <i class="fa fa-user-plus"></i>
                <span>Manage Service</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Others</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>payment_service/index"><i class="fa fa-circle-o"></i>Manage Payment Service</a></li>
              </ul>
            </li>
            <li>
              <a href="#" >
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
              </a>
            </li>-->
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Manage Users</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>addNew" ><i class="fa fa-circle-o"></i>Add User</a></li>
                <li><a href="<?php echo base_url(); ?>userListing"><i class="fa fa-circle-o"></i> View Users</a></li>
              </ul>
            </li>
          </ul>
        </section>