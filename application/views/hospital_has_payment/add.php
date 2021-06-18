<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Hospital Has Payment Add</h3>
            </div>
            <?php echo form_open('hospital_has_payment/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="card_id" class="control-label">Card Id</label>
						<div class="form-group">
							<input type="text" name="card_id" value="<?php echo $this->input->post('card_id'); ?>" class="form-control" id="card_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hospital_id" class="control-label">Hospital Id</label>
						<div class="form-group">
							<input type="text" name="hospital_id" value="<?php echo $this->input->post('hospital_id'); ?>" class="form-control" id="hospital_id" />
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