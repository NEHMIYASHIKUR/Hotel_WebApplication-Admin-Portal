<?php 
session_start();
if(isset($_SESSION['username'])){
?>


<?php
include('header.php');
if(empty($_GET['id']) || !is_numeric($_GET['id']) || $_GET['id'] < 1){
	echo '<h1> ERROR</h1>';
	die();
}
$id=$_GET['id'];
$where['HOTEL_ID']= '='.$id;
$hotel=$database->getRow("HOTEL","*",$where);
?>
<div class="row">
<div class="col col-lg-4">
<h1>EDITING A HOTEL</h1>
<form action="process.php?action=edithotel" method="post">
<input type="hidden" name="hotel_id" value="<?php echo $hotel['HOTEL_ID'];?>">
  <div class="form-group">
    <label>NAME</label>
    <input type="text" class="form-control" name="hotel_name" placeholder="NAME..." value ="<?php echo $hotel['HOTEL_NAME'];?>"required>
  </div>

  
   <div class="form-group">
    <label>DESCRIPTION</label>
    <textarea class="form-control" name="hotel_desc" rows="8" required> <?php echo $hotel['HOTEL_DESCRIPTION'];?></textarea>
  </div>
  
      <div class="form-group">
    <label>HOTEL STARS</label>
    <input type="number" class="form-control" name="hotel_stars" min="1" max="6" value="<?php echo $hotel['HOTEL_STARS'];?>" required >
  </div>
  
        <div class="form-group">
    <label>HOTEL PHONE</label>
    <input type="text" class="form-control" name="hotel_phone"  value="<?php echo $hotel['HOTEL_PHONE'];?>" required >
  </div>
  
         <div class="form-group">
    <label>HOTEL EMAIL</label>
    <input type="email" class="form-control" name="hotel_email" value="<?php echo $hotel['HOTEL_EMAIL'];?>" required >
  </div>
  
      <div class="form-group">
    <label>HOTEL WEBSITE</label>
    <input type="text" class="form-control" name="hotel_website" value="<?php echo $hotel['HOTEL_WEBSITE'];?>" required>
  </div>
  
      <div class="form-group">
    <label>HOTEL STREET</label>
    <input type="text" class="form-control" name="hotel_street" value="<?php echo $hotel['HOTEL_STREET'];?>" required>
  </div>
  
      <div class="form-group">
    <label>HOTEL STREET NO</label>
    <input type="text" class="form-control" name="hotel_street_no" value="<?php echo $hotel['HOTEL_STREET_NO'];?>" required>
  </div>
  
      <div class="form-group">
    <label>HOTEL POSTCODE</label>
    <input type="text" class="form-control" name="hotel_postcode" value="<?php echo $hotel['HOTEL_POSTCODE'];?>" required>
  </div>
  
  <div class="form-group">
  <label>CITY</label>
  <select class="form-control" name="hotel_city">
  <?php
    $cities=$database->getRows("CITY");
	foreach($cities as $city){
		$selected='';
		if($city['CITY_ID'] == $hotel['HOTEL_CITY']){
			$selected=' selected';
		}
		echo '<option
		value="'.$city['CITY_ID'].'"'.$selected.'>'.$city['CITY_NAME'].'</option>';
	}
	?>
	</select>
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
