<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Hospital Has Specialists Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('hospital_has_specialist/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Specialist Id</th>
						<th>Hospital Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($hospital_has_specialists as $h){ ?>
                    <tr>
						<td><?php echo $h['id']; ?></td>
						<td><?php echo $h['specialist_id']; ?></td>
						<td><?php echo $h['hospital_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('hospital_has_specialist/edit/'.$h['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('hospital_has_specialist/remove/'.$h['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
