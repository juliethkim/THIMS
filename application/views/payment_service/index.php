<div class="content-wrapper">
<section class="content">
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Payment Service Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('payment_service/add'); ?>" class="btn btn-primary btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Payment Type</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($payment_service as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['payment_type']; ?></td>
						<td>
                            <a href="<?php echo site_url('payment_service/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('payment_service/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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