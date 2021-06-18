<div class="content-wrapper">
<section class="content">
<div class="row">
    <div class="col-md-8">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Specialist Add</h3>
				        <div class="box-tools">
				           <?php if($role == ROLE_HOSPITAL_ADMIN )
                   { ?>
							      <a href="<?php echo site_url('specialist/add'); ?>" class="btn btn-primary btn-sm">View</a>
						      <?php } ?>
			          </div>
            </div>

              <?php echo form_open('specialist/add'); ?>
        <div class="box-body">
          		<div class="row clearfix">
					    <div class="col-md-6">
						    <label for="specialist_name" class="control-label">Specialist Name</label>
           
						    <div class="form-group">
							     <input type="text" name="specialist_name" value="<?php echo $this->input->post('specialist_name'); ?>" class="form-control" id="specialist_name" />

						    </div>
              </div>


<?php echo form_open('specialist/add'); ?>
            <div class="box-body">
              <div class="row clearfix">
          <div class="col-md-6">
            <label for="specialization" class="control-label"><span class="text-danger"></span>Specialization</label>
            <div class="form-group">
              <select name="specialization" class="form-control">
                <option value="">Select</option>
                <option value="">Neurology</option>
                <option value="">Psychiatry</option>
                <option value="">Urology</option>
                <option value="">Gastroeterology</option>
                <option value="">Pediatrician</option>
                <?php 
                $specialization_values = array(
                );

                foreach($specialization_values as $value => $display_text)
                {
                  $selected = ($value == $this->input->post('specialization')) ? ' selected="selected"' : "";

                  echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                } 
                ?>
              </select>
              <span class="text-danger"><?php echo form_error('specialization');?></span>
            </div>
          </div> 
   </div>
     </div>



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