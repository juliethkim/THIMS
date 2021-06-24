<div class="content-wrapper">
	    <section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Hospital Info Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('hospital_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
                        <th>Name</th>
						<th>Category </th>
                        <th>Ownership </th>
                        <th>Regions</th>
                    <th>Actions</th>
                    </tr>
                    <?php foreach($hospital_info as $h){ ?>
                    <tr>
						<td><?php echo $h['id']; ?></td>
                        <td><?php echo $h['name']; ?></td>
						<td><?php echo $h['category']; ?></td>
                        <td><?php echo $h['ownership_type']; ?></td>
                        <td><?php echo $h['region_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('hospital_info/edit/'.$h['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('hospital_info/remove/'.$h['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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