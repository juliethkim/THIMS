<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Hospital Has Specialist Edit</h3>
            </div>
			<?php echo form_open('hospital_has_specialist/edit/'.$hospital_has_specialist['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="specialist_id" class="control-label">Specialist Id</label>
						<div class="form-group">
							<select name="specialist_id" class="form-control">
								<option value="">select</option>
								<?php 
								$specialist_id_values = array(
								);

								foreach($specialist_id_values as $value => $display_text)
								{
									$selected = ($value == $hospital_has_specialist['specialist_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="hospital_id" class="control-label">Hospital Id</label>
						<div class="form-group">
							<select name="hospital_id" class="form-control">
								<option value="">select</option>
								<?php 
								$hospital_id_values = array(
								);

								foreach($hospital_id_values as $value => $display_text)
								{
									$selected = ($value == $hospital_has_specialist['hospital_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
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