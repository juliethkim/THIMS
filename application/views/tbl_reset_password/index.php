<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Reset Password Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_reset_password/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Email</th>
						<th>Activation Id</th>
						<th>Agent</th>
						<th>Client Ip</th>
						<th>IsDeleted</th>
						<th>CreatedBy</th>
						<th>CreatedDtm</th>
						<th>UpdatedBy</th>
						<th>UpdatedDtm</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_reset_password as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['activation_id']; ?></td>
						<td><?php echo $t['agent']; ?></td>
						<td><?php echo $t['client_ip']; ?></td>
						<td><?php echo $t['isDeleted']; ?></td>
						<td><?php echo $t['createdBy']; ?></td>
						<td><?php echo $t['createdDtm']; ?></td>
						<td><?php echo $t['updatedBy']; ?></td>
						<td><?php echo $t['updatedDtm']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_reset_password/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_reset_password/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
