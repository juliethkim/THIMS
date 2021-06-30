<?php
$ci = &get_instance();
$ci->load->model('User_model');
$ci->load->model('Hospital_info_model');
$ci->load->model('Hospital_category_model');
$ci->load->model('Hospital_ownership_model');
// $ci->load->model('Payment_service_model');

$user =  $this->session->userdata();
$userId = $user['userId'] ;

$hospitaldetails = $ci->Hospital_info_model->get_hospital_info($user['hospital_id']);
$hospital_info = $ci->Hospital_info_model->get_all_hospital_info(); 
// $tbl = $ci->User_model->getUserInfo($userId);
$hospital_category = $ci->Hospital_category_model->get_hospital_category($user['hospital_id']);
$hospital_ownership = $ci->Hospital_ownership_model->get_hospital_ownership($user['hospital_id']);  
// $hospital_services = $ci->Hospital_info_model->get_hospital_has_service($user['hospital_id']);
$hospital_map = $ci->Hospital_info_model->get_hospital_map_link($user['hospital_id']);
// $hospital_payment = $ci->Payment_service_model->get_hospital_has_payment_types($user['hospital_id']);

?>

<div class="content-wrapper">
	    <section class="content">
		<?php if($role == ROLE_ADMIN ){ ?>
        <div class="row">
        <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Hospital Info Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('hospital_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

			<!----  message notificattion ---->
			<?php if($this->session->flashdata('success')){?><div class="succWrap" id="msgshow"><?php echo $this->session->flashdata('success'); ?> </div><?php }?>
                    <!---- Message notificattion end ---->
			<div class="box-body table-responsive no-padding">
			<table class="display responsive nowrap table table-bordered table-striped table-hover"  id="dataTable1" cellspacing="0" width="100%">
                	<thead>
                     <tr>
						<th>ID</th>
						<th>Category Id</th>
						<th>Ownership Id</th>
						<th>Name</th>
						<th>Region</th>
						<!-- <th>District</th> -->
						<!-- <th>Ward</th>
						<th>Email</th> -->
						<!-- <th>Cell Phone</th>
						<th>Reg Status</th>
						<th>Number Of Specialists</th>
						<th>Latitude</th>
						<th>Longitude</th> -->
						<th>Actions</th>
                    </tr>
					</thead>
					<tbody>

                    <?php foreach($hospital_info as $h){ ?>
                    <tr>
						<td><?php echo $h['id']; ?></td>
						<td><?php echo $h['category_id']; ?></td>
						<td><?php echo $h['ownership_id']; ?></td>
						<td><?php echo $h['name']; ?></td>
						<td><?php echo $h['region']; ?></td>
						<!-- <td><?php echo $h['district']; ?></td>
						<td><?php echo $h['ward']; ?></td>
						<td><?php echo $h['email']; ?></td>
						<td><?php echo $h['phone_number']; ?></td>
						<td><?php echo $h['reg_status']; ?></td>
						<td><?php echo $h['number_of_specialists']; ?></td>
						<td><?php echo $h['latitude']; ?></td>
						<td><?php echo $h['longitude']; ?></td> -->

						<td>
                            <a href="<?php echo site_url('hospital_info/edit/'.$h['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
							<a href="" onclick="deleteItem(<?php echo $h['id']; ?>)" class="btn btn-danger btn-xs" ><span class="fa fa-trash"></span> Delete </a>

                        </td>
                    </tr>
                    <?php }?>
					</tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if($role == ROLE_HOSPITAL_ADMIN || $role == ROLE_SPECIALIST ){ ?>
<div class="box box-info">
  <div class="container">
        <div class="row title text-center">
          <h2><?php echo $hospitaldetails['name']?> Hospital</h2>
        </div>

    <div class="row content">
        <div class="col-lg-6">
          <h2>General Informations</h3>
          <table border="0" cellpadding="3" cellspacing="0" width="400">
          <tr> <td>
          <label><h5>Hospital Ownership:</h5></label>
           </td> <td>
           <label><?php echo $hospitaldetails['ownership_id']?></label>
           </td> </tr> <tr> <td>
            <label><h5>Hospital Category:</h5></label>
            </td> <td>
            <label><?php echo $hospitaldetails['category_id']?></label>
            </td> </tr> <tr> <td>
            <label><h5>Registration Number:</h5></label>
            </td> <!-- <td>
            <label><?php echo $hospitaldetails['reg_status']?></label>
            </td> </tr> <tr> <td>
            <label><h5>Number of Doctors/Specialists:</h5></label>
            </td> <td> -->
            <<!-- label><?php echo $hospitaldetails['number_of_specialists']?></label>
            </td> </tr> <tr> --> <td>
            <label><h5>Region:</h5></label>
            </td> <td>
            <label><?php echo $hospitaldetails['region']?></label>
            </td> </tr> <!-- <tr> <td>
            <label><h5>District:</h5></label>
             </td> <td>
             <label><?php echo $hospitaldetails['district']?></label>
            </td> </tr> --> <!-- <tr> <td>
            <label><h5>Ward:</h5></label>
            </td> <td>
            <label><?php echo $hospitaldetails['ward']?></label>
            </td> </tr> --> <tr> <td>
            <label><h5>Cell Phone:</h5></label>
            </td> <td>
            <label><?php echo $hospitaldetails['phone_number']?></label>
            </td> </tr> <tr> <td>
            <label><h5>Organization Email:</h5></label>
            </td> <!-- <td>
            <label><?php echo $hospitaldetails['email']?></label>
            </td> </tr> <tr> <td>
            <label><h5>Latitude:</h5></label>
            </td> <td>
            <label><?php echo $hospitaldetails['latitude']?></label>
            </td> </tr> <tr> <td>
            <label><h5>Longitude:</h5></label>
            </td> <td>
            <label><?php echo $hospitaldetails['longitude']?></label>
            </td> </tr> <tr> <td>
            </td> <td>
           </td> </tr> -->
           </table>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h2>Location & Map</h3>
          <iframe
                   src="<?php echo $hospital_map['map_link']?>"
                   width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
    </div>
        
        
    <div class="row">
     <h2>Payment Insurance Methods</h2>
                    
     <?php $payment_list = json_decode($hospital_payment['payments'], true);?>

     <?php foreach($payment_list as $p){ ?>

      <div class="col-lg-2 col-md-3">
      <ul class="service_list">
      <li ><i class="bx bx-check"></i> </i><?php print_r($p); ?></li>
      </ul>
      </div>
    <?php } ?>
    </div>


        <div class="row content">
         <h2>Service Provided</h2>
              <?php $service_list = json_decode($hospital_services['services'], true);?>
            <?php foreach($service_list as $s){ ?>
              
            <div class="col-lg-2 col-md-3">
            <ul class="service_list">
            <li ><i class="bx bx-check"></i> </i><?php print_r($s); ?></li>
            </ul>
             </div>

             <?php } ?>
         </div>
        </div>

 </div>
</div>

<?php } ?>
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