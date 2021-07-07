<div class="content-wrapper">
	    <section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Services Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('service/add'); ?>" class="btn btn-primary btn-sm">Add</a> 

                    <!--  <a href="<?php //echo site_url('service/PDF'); ?>" class="btn btn-primary btn-sm">PDF</a>  -->
                </div>
            </div>
               <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
            <div class="box-body">
                <table id="table" class="table table-striped table-bordered dt-responsive nowrap table-sm" style="width:100%"  cellspacing="0">
                <thead>
                    <tr>
						<th>ID</th>
						<th>Service Category</th>
                        <th>Service Name</th>
                        <th>Hospital Name</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php $prev='0';     ?>
                     <!-- <?php //if(is_array($services)): ?> -->
                    <?php foreach($services as $s){ ?>
                         
                         <?php if($s != $prev ){ ?>
                         
                    <tr>
						<td><?php echo $s['id']; ?></td>
						<td><?php echo $s['service_category']; ?></td>
                        <td><?php echo $s['service_name']; ?></td>
                        <td><?php echo $s['name']; ?></td>
						<td>
                            <a href="<?php echo site_url('service/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('service/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    
                     
                     <?php } ?>
                      <?php $prev=$s;   ?>
                    <?php } ?>
                    </tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
</section>
</div>





