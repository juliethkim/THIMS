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
            <label for="specialist_name">Specialist Name</label>
              <input type="text" class="form-control required" value="<?php echo set_value('specialist_name'); ?>" id="specialist_name" name="specialist_name" maxlength="128">
          </div>
                                    
        </div>

<br />

  <div class="form-group">
   <select name="specialization_id" id="specialization_id" class="form-control input-lg">
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