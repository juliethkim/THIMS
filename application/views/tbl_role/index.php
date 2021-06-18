<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Roles Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_role/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>RoleId</th>
						<th>Role</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_roles as $t){ ?>
                    <tr>
						<td><?php echo $t['roleId']; ?></td>
						<td><?php echo $t['role']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_role/edit/'.$t['roleId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_role/remove/'.$t['roleId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
