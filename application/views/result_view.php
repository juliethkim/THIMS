
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<?php 
	foreach ($results as $row) {?>
<div class ='container'>


	<div class="card" style="width: 18rem;height: auto; display: block;">
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name']?></h5>
    <td>This hospital's category is:</td>
    <td><?php echo $row['category']?></td>
    <p class="card-text">With the </p>
    <td><?php echo $row['ownership_type']?></td>
    <td>ownership</td>
    <p class="card-text">Found in</p>
    <td><?php echo $row['region_name']?></td>
      <a href="hospital_info/profile" class="btn btn-primary">View the Hospital Profile</a>
  </div>
</div>

</div>
<?php }
?>
</html>
<!--</table>-->