<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ci Session Edit</h3>
            </div>
			<?php echo form_open('ci_session/edit/'.$ci_session['session_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ip_address" class="control-label">Ip Address</label>
						<div class="form-group">
							<input type="text" name="ip_address" value="<?php echo ($this->input->post('ip_address') ? $this->input->post('ip_address') : $ci_session['ip_address']); ?>" class="form-control" id="ip_address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_agent" class="control-label">User Agent</label>
						<div class="form-group">
							<input type="text" name="user_agent" value="<?php echo ($this->input->post('user_agent') ? $this->input->post('user_agent') : $ci_session['user_agent']); ?>" class="form-control" id="user_agent" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_activity" class="control-label">Last Activity</label>
						<div class="form-group">
							<input type="text" name="last_activity" value="<?php echo ($this->input->post('last_activity') ? $this->input->post('last_activity') : $ci_session['last_activity']); ?>" class="form-control" id="last_activity" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_data" class="control-label">User Data</label>
						<div class="form-group">
							<textarea name="user_data" class="form-control" id="user_data"><?php echo ($this->input->post('user_data') ? $this->input->post('user_data') : $ci_session['user_data']); ?></textarea>
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