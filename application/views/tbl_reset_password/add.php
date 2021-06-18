<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Reset Password Add</h3>
            </div>
            <?php echo form_open('tbl_reset_password/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="activation_id" class="control-label">Activation Id</label>
						<div class="form-group">
							<input type="text" name="activation_id" value="<?php echo $this->input->post('activation_id'); ?>" class="form-control" id="activation_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="agent" class="control-label">Agent</label>
						<div class="form-group">
							<input type="text" name="agent" value="<?php echo $this->input->post('agent'); ?>" class="form-control" id="agent" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_ip" class="control-label">Client Ip</label>
						<div class="form-group">
							<input type="text" name="client_ip" value="<?php echo $this->input->post('client_ip'); ?>" class="form-control" id="client_ip" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="isDeleted" class="control-label">IsDeleted</label>
						<div class="form-group">
							<input type="text" name="isDeleted" value="<?php echo $this->input->post('isDeleted'); ?>" class="form-control" id="isDeleted" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="createdBy" class="control-label">CreatedBy</label>
						<div class="form-group">
							<input type="text" name="createdBy" value="<?php echo $this->input->post('createdBy'); ?>" class="form-control" id="createdBy" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="createdDtm" class="control-label">CreatedDtm</label>
						<div class="form-group">
							<input type="text" name="createdDtm" value="<?php echo $this->input->post('createdDtm'); ?>" class="has-datetimepicker form-control" id="createdDtm" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="updatedBy" class="control-label">UpdatedBy</label>
						<div class="form-group">
							<input type="text" name="updatedBy" value="<?php echo $this->input->post('updatedBy'); ?>" class="form-control" id="updatedBy" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="updatedDtm" class="control-label">UpdatedDtm</label>
						<div class="form-group">
							<input type="text" name="updatedDtm" value="<?php echo $this->input->post('updatedDtm'); ?>" class="has-datetimepicker form-control" id="updatedDtm" />
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