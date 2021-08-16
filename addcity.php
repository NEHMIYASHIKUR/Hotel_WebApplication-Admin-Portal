<?php 
session_start();
if(isset($_SESSION['username'])){
?>


<?php
include('header.php');

?>
<h1>ADDING A CITY</h1>
<form action="process.php?action=addcity" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>NAME</label>
    <input type="text" class="form-control" name="city_name" placeholder="NAME..." required>
  </div>

  <button type="submit" class="btn btn-success">submit</button>

<?php
	 include('bottom.php');
	 ?>
	 
	 <?php }  else{
	header('Location:index.php');
	}?>
