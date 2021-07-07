<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Hospital Info Edit</h3>
            </div>
			<?php echo form_open('hospital_info/edit/'.$hospital_info['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="category_id" class="control-label"><span class="text-danger">*</span>Category Id</label>
						<div class="form-group">
							<select name="category_id" class="form-control">
								<option value="">select</option>
								<?php 
								$category_id_values = array(
								);

								foreach($category_id_values as $value => $display_text)
								{
									$selected = ($value == $hospital_info['category_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('category_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ownership_id" class="control-label"><span class="text-danger">*</span>Ownership Id</label>
						<div class="form-group">
							<select name="ownership_id" class="form-control">
								<option value="">select</option>
								<?php 
								$ownership_id_values = array(
								);

								foreach($ownership_id_values as $value => $display_text)
								{
									$selected = ($value == $hospital_info['ownership_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('ownership_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $hospital_info['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="region" class="control-label"><span class="text-danger">*</span>Region</label>
						<div class="form-group">
							<input type="text" name="region" value="<?php echo ($this->input->post('region') ? $this->input->post('region') : $hospital_info['region']); ?>" class="form-control" id="region" />
							<span class="text-danger"><?php echo form_error('region');?></span>
						</div>
					</div>
					<!--<div class="col-md-6">
						<label for="district" class="control-label"><span class="text-danger">*</span>District</label>
						<div class="form-group">
							<input type="text" name="district" value="<?php echo ($this->input->post('district') ? $this->input->post('district') : $hospital_info['district']); ?>" class="form-control" id="district" />
							<span class="text-danger"><?php echo form_error('district');?></span>
						</div>
					</div>-->
					<!--<div class="col-md-6">
						<label for="ward" class="control-label"><span class="text-danger">*</span>Ward</label>
						<div class="form-group">
							<input type="text" name="ward" value="<?php echo ($this->input->post('ward') ? $this->input->post('ward') : $hospital_info['ward']); ?>" class="form-control" id="ward" />
							<span class="text-danger"><?php echo form_error('ward');?></span>
						</div>
					</div>-->
					<!--<div class="col-md-6">
						<label for="reg_status" class="control-label"><span class="text-danger">*</span>Reg Status</label>
						<div class="form-group">
							<input type="text" name="reg_status" value="<?php echo ($this->input->post('reg_status') ? $this->input->post('reg_status') : $hospital_info['reg_status']); ?>" class="form-control" id="reg_status" />
							<span class="text-danger"><?php echo form_error('reg_status');?></span>
						</div>
					</div>-->
					<div class="col-md-6">
						<label for="number_of_specialists" class="control-label"><span class="text-danger">*</span>Number Of Specialists</label>
						<div class="form-group">
							<input type="text" name="number_of_specialists" value="<?php echo ($this->input->post('number_of_specialists') ? $this->input->post('number_of_specialists') : $hospital_info['number_of_specialists']); ?>" class="form-control" id="number_of_specialists" />
							<span class="text-danger"><?php echo form_error('number_of_specialists');?></span>
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