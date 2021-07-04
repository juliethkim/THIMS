<div class="content-wrapper">
	    <section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Hospital Info Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('hospital_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                      <a href="<?php echo site_url('hospital_info/PDF2'); ?>" class="btn btn-success btn-sm">PDF</a> 
                </div>
            </div>


            <div class="box-body">
                <table id="table" class="table table-striped table-bordered dt-responsive nowrap table-sm" style="width:100%"  cellspacing="0">
                <thead>
                    <tr>
						<th>ID</th>
                        <th>Name</th>
						<th>Category </th>
                        <th>Ownership </th>
                        <th>Regions</th>
                    <th>Actions</th>
                    </tr>
                    </thead>
                    <?php foreach($hospital_info as $h){ ?>
                    <tbody>
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
                    </tbody>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
</section>
</div>
<script>
            $(document).ready( function () {
                $('#dataTable1').DataTable({
                    dom:'Bfrtip',
                    buttons: [
                         'copy','csv','excel','pdf',
                        {
                            extend: [
                                 'print',
                            ],
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        'colvis'
                    ],
                    columnDefs: [{
                        targets: -1,
                        visible: true
                    }]
                });
            });
        </script>