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
$where2['IMAGE_HOTEL']= '='.$id;
$hotel=$database->getRow("HOTEL_VIEW","*",$where);
$images=$database->getRows("IMAGE","*",$where2);
$address = $hotel ['HOTEL_STREET'].' '.$hotel['HOTEL_STREET_NO'].' '.$hotel['CITY_NAME'].' '. $hotel['HOTEL_POSTCODE'];
?>
<div class="row">
<div class="col col-lg-12">
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
	<?php
	   $count=0;
	   foreach($images as &$image){
		   if($count==0){
			   ?>
			   <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		   <?php
		      } else {
				  ?>
				  <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $count; ?>"></li>
	        <?php 
			  }
			  $count++;
	   }
	   ?>

    </ol>
    <div class="carousel-inner">
	<?php
    $count=0;
	foreach($images as &$image){
		$count++;
		if($count ==1){
			$active='active';
		}
		else{
			$active='';
		}
		?>
      <div class="carousel-item <?php echo $active; ?>">
        <img src="<?php echo $image['IMAGE_FILE']; ?>" class="d-block w-100" alt="HOTEL IMAGE 1">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $hotel['HOTEL_NAME']; ?></h5>
          </div>
        </div>
	<?php
	}
	?>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</div>
<div class="col col-lg-9">
<P><?php echo nl2br($hotel['HOTEL_DESCRIPTION']); ?></P>
</div>
<div class="col col-lg-3">
<b>Phone : </b><?php echo $hotel['HOTEL_PHONE']; ?><br/>
<b>E-mail : </b><a href="<?php echo $hotel['HOTEL_EMAIL']; ?>"><?php echo $hotel['HOTEL_EMAIL']; ?></a><br/>
<b>Website : </b><a href="<?php echo $hotel['HOTEL_WEBSITE']; ?>"><?php echo $hotel['HOTEL_WEBSITE']; ?></a><br/>
<b>Phone : </b><?php echo $address; ?></br>

</div>

	<?php    
	foreach($images as &$image){
	 ?>
  <div class="card" style="width: 18rem;">
  <img src="<?php echo $image['IMAGE_FILE']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <a href="process.php?action=deleteimage&id=<?php echo $image['IMAGE_ID']; ?>" class="btn btn-danger">Delete Hotel</a>
  </div>
</div>
	<?php } ?>

<?php
	 include('bottom.php');
	 ?>
	 <?php }  else{
	header('Location:index.php');
	}?>	 

