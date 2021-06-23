
<?php 
	foreach ($results as $row) {?>
<div class ='container'>


<!--<div class="card text-center" style="width: 18rem;height: auto; display: block;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row->specialist_name?></h5>
    <td>Has specialized in:</td>
    <td><?php echo $row->specialization_id?></td>
    <p class="card-text">And works at </p>
    <td><?php echo $row->hospital_id?></td>
     <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>-->
<div class="card" style="width: 18rem;height: auto;display: block;">

  <div class="card-body">
    <h5 class="card-title"><?php echo $row->specialist_name?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $row->specialization_id?></li>
    <li class="list-group-item"><?php echo $row->hospital_id?></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
 
  </div>
</div>


</div>
<?php }
?>
