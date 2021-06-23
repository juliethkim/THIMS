
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<?php 
	foreach ($hospitalresults as $row) {?>
<div class ='container'>
	

  <!--  <td><?php echo $row->name?></td>
    <td><?php echo $row->category?></td>
    <td><?php echo $row->ownership?></td>
    <td><?php echo $row->region_name?></td>-->


	<div class="card" style="width: 18rem;height: auto; display: block;">
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    
      <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>
<?php }
?>
</html>
<!--</table>-->