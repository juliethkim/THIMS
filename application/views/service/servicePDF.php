<div class="content-wrapper">
        <section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Services Listing</h3>
            </div>
               <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
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





