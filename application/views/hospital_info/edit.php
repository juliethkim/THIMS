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
						<label for="category_id" class="control-label"><span class="text-danger">*</span>Category</label>
					 <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="hospital_category">Category</label>
                                     <?php $attributes = 'class="form-control" id="hospital_category"';
                                     echo form_dropdown('hospital_category', $hospital_category, set_value('hospital_category'), $attributes); ?>
                                 <span class="text-danger"><?php echo form_error('hospital_category'); ?></span>
                                 </div>
                            </div>
					</div>
					  <div class="col-md-6">
                        <div class="form-group">
                                    <label for="hospital_ownership">Ownership</label>
                                     <?php $attributes = 'class="form-control" id="hospital_ownership_id"';
                                     echo form_dropdown('hospital_ownership', $hospital_ownership, set_value('hospital_ownership'), $attributes); ?>
                                 <span class="text-danger"><?php echo form_error('hospital_ownership'); ?></span>
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
                        <div class="form-group">
                             <label for="regions">Region</label>
                                     <?php $attributes = 'class="form-control" id="regions"';
                                     echo form_dropdown('regions', $regions, set_value('regions'), $attributes); ?>
                                <span class="text-danger"><?php echo form_error('regions'); ?></span>
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