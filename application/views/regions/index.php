<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Regions Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_role/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>RegionId</th>
						<th>Region Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($regions as $r){ ?>
                    <tr>
						<td><?php echo $r['region_id']; ?></td>
						<td><?php echo $r['region_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('regions/edit/'.$r['region_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('regions/remove/'.$r['region_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
