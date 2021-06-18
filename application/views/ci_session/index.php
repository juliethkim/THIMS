<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ci Sessions Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('ci_session/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Session Id</th>
						<th>Ip Address</th>
						<th>User Agent</th>
						<th>Last Activity</th>
						<th>User Data</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($ci_sessions as $c){ ?>
                    <tr>
						<td><?php echo $c['session_id']; ?></td>
						<td><?php echo $c['ip_address']; ?></td>
						<td><?php echo $c['user_agent']; ?></td>
						<td><?php echo $c['last_activity']; ?></td>
						<td><?php echo $c['user_data']; ?></td>
						<td>
                            <a href="<?php echo site_url('ci_session/edit/'.$c['session_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('ci_session/remove/'.$c['session_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
