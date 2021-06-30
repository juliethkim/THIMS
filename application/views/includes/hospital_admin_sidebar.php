        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Hospital Admin Dashboard</span></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Manage Specialists</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>specialist/add"><i class="fa fa-circle-o"></i>Add Specialist</a></li>
                <li><a href="<?php echo base_url(); ?>'specialist/index"><i class="fa fa-circle-o"></i>View Specialists</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Manage Services</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>service/add"><i class="fa fa-circle-o"></i>Add Service</a></li>
                <li><a href="<?php echo base_url(); ?>service/index"><i class="fa fa-circle-o"></i>View Services</a></li>
             </ul>
            </li>
             <li> 
              <a href="<?php echo base_url(); ?>hospital_info/profile" >
                <i class="fa fa-table"></i>
                <span>Hospital Profile</span>
              </a>
            </li>
            <li>
            <li>
              <a href="<?php echo base_url(); ?>hospital_info/profile" >
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
              </a>
            </li>
            </li> 
          </ul>
        </section>