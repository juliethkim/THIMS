<div class="content-wrapper">
	    <section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Specialists Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('specialist/add'); ?>" class="btn btn-primary btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Specialist Name</th>
                        <th>Specialization</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($specialists as $s){ ?>
                    <tr>
						<td><?php echo $s['id']; ?></td>
						<td><?php echo $s['specialist_name']; ?></td>
                        <td><?php echo $s['specialization']; ?></td>

						<td>
                            <a href="<?php echo site_url('specialist/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('specialist/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
</section>
</div>