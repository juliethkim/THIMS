<div class="content-wrapper">
	    <section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Services Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('service/add'); ?>" class="btn btn-primary btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body">
                <table class="table table-striped" id="dataTable1">
                    <tr>
						<th>ID</th>
						<th>Service Category</th>
                        <th>Service Name</th>
                        <th>Hospital Name</th>
						<th>Actions</th>
                    </tr>
                     <?php $prev='0';     ?>
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
                </table>
                                
            </div>
        </div>
    </div>
</div>
</section>
</div>


<script type="text/javascript">
                        $(document).ready(function () {
                            setTimeout(function() {
                                $('.succWrap').slideUp("slow");
                            }, 3000);
                        });
                    </script>


                    <script type="text/javascript">
    var url = "<?php echo base_url(); ?>";
    function deleteItem(id){
       var r = confirm("Are sure that you want to delete this Hospital?");
        if (r){
          window.location = url + 'hospital_info/remove/' + id;

        }
        else{
          return true;
        }
    }
</script>


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