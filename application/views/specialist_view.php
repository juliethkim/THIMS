<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<?php 
	foreach ($results as $row) {?>
<div class ='container'>


<div class="card text-center" style="width: 18rem;height: auto;display: block;">

  <div class="card-body">
    <!-- <td><?php echo $row['specialist_name']?></td> -->
    <h5 class="card-title"><?php echo $row['specialist_name']?></h5>
    <td><?php echo $row['specialization']?></td>
    <td><?php echo $row['name']?></td>

    <a href="#" class="card-link">Card link</a>
 
  </div>
</div>


</div>
<?php }
?>
</html>