<div class="content-wrapper">
	    <section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Specialists Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('specialist/add'); ?>" class="btn btn-primary btn-sm">Add</a> 
                      <a href="<?php echo site_url('specialist/PDF1'); ?>" class="btn btn-primary btn-sm">PDF</a>
                </div>
            </div>
            
            <div class="box-body" >
                <table id="table" class="table table-striped table-bordered dt-responsive nowrap table-sm" style="width:100%"  cellspacing="0">
                   <thead>
                    <tr>
						<th>ID</th>
						<th>Specialist Name</th>
                        <th>Specialization</th>
                        <th>Hospital Name</th> 
						<th>Actions</th>
                    </tr>
                     </thead>
                     <?php $prev='0';     ?>
                    <?php foreach($specialists as $s){ ?>
                         
                         <?php if($s != $prev ){ ?>
                   <tbody>
                    <tr>
						<td><?php echo $s['id']; ?></td>
						<td><?php echo $s['specialist_name']; ?></td>
                        <td><?php echo $s['specialization']; ?></td>
                        <td><?php echo $s['name']; ?></td>

						<td>
                            <a href="<?php echo site_url('specialist/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('specialist/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                   </tbody>
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


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
//     jQuery(document).ready(function(){
//         jQuery('ul.pagination li a').click(function (e) {
//             e.preventDefault();            
//             var link = jQuery(this).get(0).href;            
//             var value = link.substring(link.lastIndexOf('/') + 1);
//             jQuery("#searchList").attr("action", baseURL + "specialist/index/" + value);
//             jQuery("#searchList").submit();
//         });
//     });
// </script>

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