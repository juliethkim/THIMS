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
          	<div class="box-body">
          		<div class="row clearfix">
				  <div class="col-md-6">


                     <div class="col-md-6">
						<label for="service_category" class="control-label">Service Category</label>
						<div class="form-group">
							<input type="text" name="service_category" value="<?php echo $this->input->post('service_category'); ?>" class="form-control" id="service_category" />
						</div>
					 </div>





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


					<div class="col-md-6">
						<label for="service_name" class="control-label">Service Name</label>
						<div class="form-group">
							<input type="text" name="service_name" value="<?php echo $this->input->post('service_name'); ?>" class="form-control" id="service_name" />
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