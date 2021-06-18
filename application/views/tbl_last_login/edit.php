<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Last Login Edit</h3>
            </div>
			<?php echo form_open('tbl_last_login/edit/'.$tbl_last_login['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="userId" class="control-label">UserId</label>
						<div class="form-group">
							<input type="text" name="userId" value="<?php echo ($this->input->post('userId') ? $this->input->post('userId') : $tbl_last_login['userId']); ?>" class="form-control" id="userId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sessionData" class="control-label">SessionData</label>
						<div class="form-group">
							<input type="text" name="sessionData" value="<?php echo ($this->input->post('sessionData') ? $this->input->post('sessionData') : $tbl_last_login['sessionData']); ?>" class="form-control" id="sessionData" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="machineIp" class="control-label">MachineIp</label>
						<div class="form-group">
							<input type="text" name="machineIp" value="<?php echo ($this->input->post('machineIp') ? $this->input->post('machineIp') : $tbl_last_login['machineIp']); ?>" class="form-control" id="machineIp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="userAgent" class="control-label">UserAgent</label>
						<div class="form-group">
							<input type="text" name="userAgent" value="<?php echo ($this->input->post('userAgent') ? $this->input->post('userAgent') : $tbl_last_login['userAgent']); ?>" class="form-control" id="userAgent" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="agentString" class="control-label">AgentString</label>
						<div class="form-group">
							<input type="text" name="agentString" value="<?php echo ($this->input->post('agentString') ? $this->input->post('agentString') : $tbl_last_login['agentString']); ?>" class="form-control" id="agentString" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="platform" class="control-label">Platform</label>
						<div class="form-group">
							<input type="text" name="platform" value="<?php echo ($this->input->post('platform') ? $this->input->post('platform') : $tbl_last_login['platform']); ?>" class="form-control" id="platform" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="createdDtm" class="control-label">CreatedDtm</label>
						<div class="form-group">
							<input type="text" name="createdDtm" value="<?php echo ($this->input->post('createdDtm') ? $this->input->post('createdDtm') : $tbl_last_login['createdDtm']); ?>" class="has-datetimepicker form-control" id="createdDtm" />
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