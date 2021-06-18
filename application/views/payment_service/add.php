<div class="content-wrapper">
<section class="content">
<div class="row">
    <div class="col-md-8">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Payment Service Add</h3>
				  <div class="box-tools">
							<a href="<?php echo site_url('payment_service/index'); ?>" class="btn btn-primary btn-sm">View</a>
			    </div>
            </div>
            <?php echo form_open('payment_service/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="payment_type" class="control-label">Payment Type</label>
						<div class="form-group">
							<input type="text" name="payment_type" value="<?php echo $this->input->post('payment_type'); ?>" class="form-control" id="payment_type" />
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