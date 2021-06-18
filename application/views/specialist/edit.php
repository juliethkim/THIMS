<div class="content-wrapper">
	    <section class="content">
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Specialist Edit</h3>
            </div>
			<?php echo form_open('specialist/edit/'.$specialist['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="specialist_name" class="control-label">Specialist Name</label>
						<div class="form-group">
							<input type="text" name="specialist_name" value="<?php echo ($this->input->post('specialist_name') ? $this->input->post('specialist_name') : $specialist['specialist_name']); ?>" class="form-control" id="specialist_name" />
						</div>
					</div>
				</div>

	       <div class="row clearfix">
					<div class="col-md-6">
						<label for="Specialization" class="control-label">Specialization</label>
						<div class="form-group">
							<input type="text" name="Specialization" value="<?php echo ($this->input->post('Specialization') ? $this->input->post('Specialization') : $specialist['Specialization']); ?>" class="form-control" id="Specialization" />
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
</section>
</div>