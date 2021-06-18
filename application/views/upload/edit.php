<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="title" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<select name="title" class="form-control">
								<option value="">select</option>
								<?php 
								$title_values = array(
									'admin'=>'Admin',
									'gis'=>'GIS Officer',
									'accountant'=>'Accountant',
									'valuer'=>'Valuer',
									'technician'=>'Technician',
								);

								foreach($title_values as $value => $display_text)
								{
									$selected = ($value == $user['title']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userpassword" class="control-label"><span class="text-danger">*</span>Userpassword</label>
						<div class="form-group">
							<input type="text" name="userpassword" value="<?php echo ($this->input->post('userpassword') ? $this->input->post('userpassword') : $user['userpassword']); ?>" class="form-control" id="userpassword" />
							<span class="text-danger"><?php echo form_error('userpassword');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="firstname" class="control-label"><span class="text-danger">*</span>Firstname</label>
						<div class="form-group">
							<input type="text" name="firstname" value="<?php echo ($this->input->post('firstname') ? $this->input->post('firstname') : $user['firstname']); ?>" class="form-control" id="firstname" />
							<span class="text-danger"><?php echo form_error('firstname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lastname" class="control-label"><span class="text-danger">*</span>Lastname</label>
						<div class="form-group">
							<input type="text" name="lastname" value="<?php echo ($this->input->post('lastname') ? $this->input->post('lastname') : $user['lastname']); ?>" class="form-control" id="lastname" />
							<span class="text-danger"><?php echo form_error('lastname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobileNumber" class="control-label"><span class="text-danger">*</span>MobileNumber</label>
						<div class="form-group">
							<input type="text" name="mobileNumber" value="<?php echo ($this->input->post('mobileNumber') ? $this->input->post('mobileNumber') : $user['mobileNumber']); ?>" class="form-control" id="mobileNumber" />
							<span class="text-danger"><?php echo form_error('mobileNumber');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="regDate" class="control-label"><span class="text-danger">*</span>RegDate</label>
						<div class="form-group">
							<input type="text" name="regDate" value="<?php echo ($this->input->post('regDate') ? $this->input->post('regDate') : $user['regDate']); ?>" class="has-datepicker form-control" id="regDate" />
							<span class="text-danger"><?php echo form_error('regDate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="isActive" class="control-label"><span class="text-danger">*</span>IsActive</label>
						<div class="form-group">
							<input type="text" name="isActive" value="<?php echo ($this->input->post('isActive') ? $this->input->post('isActive') : $user['isActive']); ?>" class="form-control" id="isActive" />
							<span class="text-danger"><?php echo form_error('isActive');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lastUpdationDate" class="control-label"><span class="text-danger">*</span>LastUpdationDate</label>
						<div class="form-group">
							<input type="text" name="lastUpdationDate" value="<?php echo ($this->input->post('lastUpdationDate') ? $this->input->post('lastUpdationDate') : $user['lastUpdationDate']); ?>" class="has-datepicker form-control" id="lastUpdationDate" />
							<span class="text-danger"><?php echo form_error('lastUpdationDate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_level" class="control-label"><span class="text-danger">*</span>User Level</label>
						<div class="form-group">
							<input type="text" name="user_level" value="<?php echo ($this->input->post('user_level') ? $this->input->post('user_level') : $user['user_level']); ?>" class="form-control" id="user_level" />
							<span class="text-danger"><?php echo form_error('user_level');?></span>
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