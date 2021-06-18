<div class="content-wrapper">
	    <section class="content">
<div class="row">
    <div class="col-md-8">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Hospital Info Add</h3>
				
            </div>
		 <?php echo form_open('hospitals/addNew'); ?>
          	<div class="box-body">
          		<div class="row clearfix">

				
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>


	               <div class="col-md-6">
						<label for="ownership" class="control-label"><span class="text-danger">*</span>Ownership</label>
						<div class="form-group">
						  <select name="ownership" class="form-control">
							 <option value="">select Ownership</option>
							 <option value="">Government</option>
							 <option value="">Private</option>
								<?php 
								foreach($all_hospital_ownership as $ownership)
								{
									$selected = ($ownership['ownership'] == $this->input->post('ownership')) ? ' selected="selected"' : "";
									echo '<option value="'.$ownership['ownership'].'" '.$selected.'>'.$ownership['type'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('ownerships');?></span>
						</div>
					</div>



                	<div class="col-md-6">
						<label for="Category" class="control-label"><span class="text-danger">*</span>Hospital category</label>
						<div class="form-group">
						  <select name="category" class="form-control">
							 <option value="">select category</option>
							 <option value="">Refferal hospital</option>
							 <option value="">Regional hospital</option>
							 <option value="">District hospital</option>
							 <option value="">Dispensary</option>
								<?php 
								foreach($all_hospital_category as $category)
								{
									$selected = ($category['category'] == $this->input->post('category')) ? ' selected="selected"' : "";
									echo '<option value="'.$category['category'].'" '.$selected.'>'.$category['type'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('category');?></span>
					</div>
				</div>



					<div class="col-md-6">
						<label for="region" class="control-label"><span class="text-danger">*</span>Region</label>
						<div class="form-group">
							<input type="text" name="region" value="<?php echo $this->input->post('region'); ?>" class="form-control" id="region" />
							<span class="text-danger"><?php echo form_error('region');?></span>
						</div>
					</div>

               <!-- <div class="col-md-6">
						<label for="Region" class="control-label"><span class="text-danger">*</span>Hospital Region</label>
						<div class="form-group">
							Regions list:
						  <select Region ="NEW">

							 <option value="">---- select ----</option>
							 <?mysql_connect("localhost" , "root" , "");
							 mysql_select_db("thims");
							 $select = "thims"
							 if (isset($select)&& $select!=""){
							 	$select = $_POST['NEW'];
							 }
							 ?>
							 <?
							 $list = mysql_query("select * from employee order by region_id asc");
							 while ($row_list = mysql_fetch_assoc($list)) {
							 	?>
							 	
							 }



                </div>-->

					<!--<div class="col-md-6">
						<label for="district" class="control-label"><span class="text-danger">*</span>District</label>
						<div class="form-group">
							<input type="text" name="district" value="<?php echo $this->input->post('district'); ?>" class="form-control" id="district" />
							<span class="text-danger"><?php echo form_error('district');?></span>
						</div>
					</div>-->
				
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
</section>
</div>