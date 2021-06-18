

<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="title" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							
							<span class="text-danger"><?php echo form_error('title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userpassword" class="control-label"><span class="text-danger">*</span>Userpassword</label>
						<div class="form-group">
							<input type="password" name="userpassword" value="<?php echo $this->input->post('userpassword'); ?>" class="form-control" id="userpassword" />
							<span class="text-danger"><?php echo form_error('userpassword');?></span>
						</div>
					</div>
				</div>

					<div class="row clearfix">
					<div class="col-md-6">
						<label for="firstname" class="control-label"><span class="text-danger">*</span>Firstname</label>
						<div class="form-group">
							<input type="text" name="firstname" value="<?php echo $this->input->post('firstname'); ?>" class="form-control" id="firstname" />
							<span class="text-danger"><?php echo form_error('firstname');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="lastname" class="control-label"><span class="text-danger">*</span>Lastname</label>
						<div class="form-group">
							<input type="text" name="lastname" value="<?php echo $this->input->post('lastname'); ?>" class="form-control" id="lastname" />
							<span class="text-danger"><?php echo form_error('lastname');?></span>
						</div>
					</div>
				</div>


					<div class="row clearfix">
						<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobileNumber" class="control-label"><span class="text-danger">*</span>MobileNumber</label>
						<div class="form-group">
							<input type="text" name="mobileNumber" value="<?php echo $this->input->post('mobileNumber'); ?>" class="form-control" id="mobileNumber" />
							<span class="text-danger"><?php echo form_error('mobileNumber');?></span>
						</div>
					</div>
				</div>
				
				
					
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Add
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>

