<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Title</th>
						<th>Userpassword</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>MobileNumber</th>
						<th>RegDate</th>
						<th>IsActive</th>
						<th>LastUpdationDate</th>
						<th>User Level</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($users as $u){ ?>
                    <tr>
						<td><?php echo $u['id']; ?></td>
						<td><?php echo $u['title']; ?></td>
						<td><?php echo $u['userpassword']; ?></td>
						<td><?php echo $u['firstname']; ?></td>
						<td><?php echo $u['lastname']; ?></td>
						<td><?php echo $u['email']; ?></td>
						<td><?php echo $u['mobileNumber']; ?></td>
						<td><?php echo $u['regDate']; ?></td>
						<td><?php echo $u['isActive']; ?></td>
						<td><?php echo $u['lastUpdationDate']; ?></td>
						<td><?php echo $u['user_level']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
