<div class="content-wrapper">
	    <section class="content">
<div class="row">
    <div class="col-md-8">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Service Edit</h3>
				  <div class="box-tools">
              	<?php if($role == ROLE_HOSPITAL_ADMIN ){ ?>
							<a href="<?php echo site_url('service/index'); ?>" class="btn btn-success btn-sm">View</a>
						<?php } ?>
			    </div>
            </div>
			<?php echo form_open('service/edit/'.$service['id']); ?>
			<div class="box-body">
				<div class="row clearfix">



                       <div class="col-md-6">
						<label for="service_category" class="control-label">Service Category</label>
						<div class="form-group">
							<input type="text" name="service_category" value="<?php echo ($this->input->post('service_category') ? $this->input->post('service_category') : $service['service_category']); ?>" class="form-control" id="service_category" />
						</div>


					<div class="col-md-6">
						<label for="service_name" class="control-label">Service Name</label>
						<div class="form-group">
							<input type="text" name="service_name" value="<?php echo ($this->input->post('service_name') ? $this->input->post('service_name') : $service['service_name']); ?>" class="form-control" id="service_name" />
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