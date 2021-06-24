<div class="content-wrapper">
      <section class="content">
<div class="row">
    <div class="col-md-8">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Specialist Add</h3>
          <div class="box-tools">
                <?php if($role == ROLE_HOSPITAL_ADMIN ){ ?>
              <a href="<?php echo site_url('specialist/index'); ?>" class="btn btn-primary btn-sm">View</a>
            <?php } ?>
          </div>
            </div>
            <?php echo form_open('specialist/add'); ?>
            
      <!--<div class="container body">
              <div class="row clearfix">
              <div class="col-md-6">

                     <div class="form-group">
            <label for="service_category" class="control-label">Service Category</label>
            <div class="form-group">
              <input type="text" name="service_category" value="<?php echo $this->input->post('service_category'); ?>" class="form-control" id="service_category" />
            </div>
           </div>-->





            <!--<label for="service_category" class="control-label"><span class="text-danger">*</span>Service Category</label>
            <div class="form-group">
              <select name="service_category" class="form-control">
                <option value="">select</option>
                <option value="">Laboratory</option>
                <option value="">Radiology</option>
                <option value="">Martenity</option>
                <option value="">Blood</option>
                <?php 
                $service_category_values = array(
                );

                foreach($service_category_values as $value => $display_text)
                {
                  $selected = ($value == $this->input->post('service_category')) ? ' selected="selected"' : "";

                  echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                } 
                ?>
              </select>
              <span class="text-danger"><?php echo form_error('service_category');?></span>
            </div>
          </div>-->

        <!--<div class="container body">
                <div class="row clearfix">
              <div class="col-md-6">

                   <div class="form-group">
          <label for="service_name" class="control-label">Service Name</label>
            <div class="form-group">
              <input type="text" name="service_name" value="<?php echo $this->input->post('service_name'); ?>" class="form-control" id="service_name" />
            </div>
          </div>
          
        </div>
      </div>
    </div>-->



<style>
 .box
 {
  width:100%;
  max-width: 650px;
  margin:0 auto;
 }
 </style>
</head>
<body>
 <div class="container box">
  <br />
  <h3 align="center">Add Specialist</h3>
  <br />

 
  
   <div class="col-md-6">                                
         <div class="form-group">
            <label for="name">Specialist Name</label>
              <input type="text" class="form-control required" value="<?php echo set_value('name'); ?>" id="name" name="name" maxlength="128">
          </div>
                                    
        </div>

<br />

  <div class="form-group">
   <select name="tbl_specialization" id="tbl_specialization" class="form-control input-lg">
    <option value="">Specialization</option>
    <?php
    foreach($tbl_specialization as $row)
      
    {
     echo '<option value="'.$row->id.'">'.$row->specialization.'</option>';
    }
    ?>
   </select>
  </div>
 
  <br />


  <br />



 </div>
</body>
</html>
<script>
$(document).ready(function(){
 $('#tbl_specialization').change(function(){
  var id = $('#tbl_specialization').val();

 });
 });




/*$(document).ready(function(){
 $('#tbl_service_category').change(function(){
  var id = $('#tbl_service_category').val();
});


 
});*/
</script>


            <div class="box-footer">
              <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i> Save
              </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</section>
</div>