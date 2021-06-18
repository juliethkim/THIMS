<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Hospital Has Services Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('hospital_has_service/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Hospital Id</th>
						<th>Service Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($hospital_has_services as $h){ ?>
                    <tr>
						<td><?php echo $h['id']; ?></td>
						<td><?php echo $h['hospital_id']; ?></td>
						<td><?php echo $h['service_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('hospital_has_service/edit/'.$h['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('hospital_has_service/remove/'.$h['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
