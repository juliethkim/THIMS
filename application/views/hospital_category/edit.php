<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Hospital Category Edit</h3>
            </div>
			<?php echo form_open('hospital_category/edit/'.$hospital_category['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="category" class="control-label">Category</label>
						<div class="form-group">
							<input type="text" name="category" value="<?php echo ($this->input->post('category') ? $this->input->post('category') : $hospital_category['category']); ?>" class="form-control" id="category" />
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