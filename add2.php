<?php 
session_start();
if(isset($_SESSION['username'])){
?>


<?php
include('header.php');

?>
<div class="row">
<div class="col col-lg-4">
<h1>ADDING A HOTEL</h1>
<form action="process.php?action=addhotel" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>NAME</label>
    <input type="text" class="form-control" name="hotel_name" placeholder="NAME..." required>
  </div>
  
   <div class="form-group">
    <label>DESCRIPTION</label>
    <textarea class="form-control" name="hotel_desc" rows="8" required></textarea>
  </div>
  
      <div class="form-group">
    <label>HOTEL STARS</label>
    <input type="number" class="form-control" name="hotel_stars" min="1" max="6" value="6" required >
  </div>
  
        <div class="form-group">
    <label>HOTEL PHONE</label>
    <input type="text" class="form-control" name="hotel_phone" required >
  </div>
  
         <div class="form-group">
    <label>HOTEL EMAIL</label>
    <input type="email" class="form-control" name="hotel_email" required >
  </div>
  
    <div class="form-group">
    <label>HOTEL WEBSITE</label>
    <input type="text" class="form-control" name="hotel_website"  required>
  </div>
      <div class="form-group">
    <label>HOTEL STREET</label>
    <input type="text" class="form-control" name="hotel_street"  required>
  </div>
      <div class="form-group">
    <label>HOTEL STREET NO</label>
    <input type="text" class="form-control" name="hotel_street_no"  required>
  </div>
      <div class="form-group">
    <label>HOTEL POSTCODE</label>
    <input type="text" class="form-control" name="hotel_postcode"  required>
  </div>
  
  <div class="form-group">
  <label>CITY</label>
  <select class="form-control" name="hotel_city">
  <?php
    $cities=$database->getRows("CITY");
	foreach($cities as $city){
		echo '<option
		value="'.$city['CITY_ID'].'">'.$city['CITY_NAME'].'</option>';
	}
	?>
	</select>
	</div>
	  <div class="form-group">
    <label>image</label>
    <input type="file" class="form-control-file" name="hotel_images[]" multiple>
  </div>
  
  <button type="submit" class="btn btn-success">submit</button>
</form>
</div>
</div>

<?php
	 include('bottom.php');
	 ?>
	 
	 <?php }  else{
	header('Location:index.php');
	}?>
