<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Users Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>UserId</th>
						<th>Password</th>
						<th>Email</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>RoleId</th>
						<th>IsDeleted</th>
						<th>CreatedBy</th>
						<th>CreatedDtm</th>
						<th>UpdatedBy</th>
						<th>UpdatedDtm</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_users as $t){ ?>
                    <tr>
						<td><?php echo $t['userId']; ?></td>
						<td><?php echo $t['password']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['name']; ?></td>
						<td><?php echo $t['mobile']; ?></td>
						<td><?php echo $t['roleId']; ?></td>
						<td><?php echo $t['isDeleted']; ?></td>
						<td><?php echo $t['createdBy']; ?></td>
						<td><?php echo $t['createdDtm']; ?></td>
						<td><?php echo $t['updatedBy']; ?></td>
						<td><?php echo $t['updatedDtm']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_user/edit/'.$t['userId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_user/remove/'.$t['userId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
