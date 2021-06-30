<div class="content-wrapper">
	    <section class="content">
<div class="row">
  
    <div class="col-md-8">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Service Add</h3>
				  <div class="box-tools">
              	<?php if($role == ROLE_HOSPITAL_ADMIN ){ ?>
							<a href="<?php echo site_url('service/index'); ?>" class="btn btn-primary btn-sm">View</a>
						<?php } ?>
			    </div>
            </div>
            <?php echo form_open('service/add'); ?>

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
  <h3 align="center">Add Hospital Service</h3>
  <br />

 
   <div class="form-group">
   <select name="service_category_id" id="service_category_id" class="form-control input-lg">
    <option value="">Service Category</option>
    <?php
    foreach($tbl_service_category as $row)
    {
     echo '<option value="'.$row->id.'">'.$row->service_category.'</option>';
    }
    ?>
   </select>
  </div>

<br />


  <div class="form-group">
   <select name="service_name_id" id="service_name_id" class="form-control input-lg">
    <option value="">Service Name</option>
    <?php
    foreach($tbl_service_name as $row)
    {
     echo '<option value="'.$row->id.'">'.$row->service_name.'</option>';
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
 $('#tbl_service_name').change(function(){
  var id = $('#tbl_service_name').val();

 });
 });




$(document).ready(function(){
 $('#tbl_service_category').change(function(){
  var id = $('#tbl_service_category').val();
});


 
});
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