
<div class="content-wrapper">
	    <section class="content">

  
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Specialist Edit</h3>
        	

        	<div class="box-tools">
                <?php if($role == 'ROLE_HOSPITAL_ADMIN' ){ ?>
              <a href="<?php echo site_url('specialist/index'); ?>" class="btn btn-primary btn-sm">View</a>
            <?php } ?>
          </div>
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
		<div class="form-group">
	    <div class="col-md-6">
   			<select name="specialization_id" id="specialization_id" class="form-control input-lg">
   			 <option value="">Specialization</option>
   				 <?php
    			foreach($tbl_specialization as $row)
      
    		{
    		 echo '<option value="'.$row->id.'">'.$row->specialization.'</option>';
   			 }
   			 ?>
  		 </select>
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


<script>
$(document).ready(function(){
 $('#tbl_specialization').change(function(){
  var id = $('#tbl_specialization').val();

 });
 });

</script>

