<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Regions Edit</h3>
            </div>
			<?php echo form_open('regions/edit/'.$regions['region_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="region_name" class="control-label">Regions</label>
						<div class="form-group">
							<input type="text" name="region_name" value="<?php echo ($this->input->post('region_name') ? $this->input->post('region_name') : $regions['region_name']); ?>" class="form-control" id="region_name" />
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