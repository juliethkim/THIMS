<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Last Login Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_last_login/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>UserId</th>
						<th>SessionData</th>
						<th>MachineIp</th>
						<th>UserAgent</th>
						<th>AgentString</th>
						<th>Platform</th>
						<th>CreatedDtm</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_last_login as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['userId']; ?></td>
						<td><?php echo $t['sessionData']; ?></td>
						<td><?php echo $t['machineIp']; ?></td>
						<td><?php echo $t['userAgent']; ?></td>
						<td><?php echo $t['agentString']; ?></td>
						<td><?php echo $t['platform']; ?></td>
						<td><?php echo $t['createdDtm']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_last_login/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_last_login/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
