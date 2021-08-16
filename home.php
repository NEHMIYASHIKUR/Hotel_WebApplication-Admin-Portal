<?php 

session_start();
if(isset($_SESSION['username'])){

?>

		<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>  <?php echo "HELLO ".$_SESSION['username']; ?> </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
         </div>

<?php
include('header.php');
?>
        <div class="row">
        <div class="col col-lg-12">
		<?php
		if(isset($_GET['added'])){
			?>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>SUCCESS !</strong> A NEW HOTEL HAVE BEEN ADDED.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
         </div>
		 <?php
		    }
			?>
		
                        <table class="table table-striped">
                  <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAME</th>
                        <th scope="col">ADDRESS</th>
                        <th scope="col">PHONE</th>
                          <th scope="col">EMAIL</th>
                          <th scope="col">WEBSITE</th>
                          
                      </tr>
                      </thead>
                      <tbody>
                          <?php
              $hotels = $database->getRows("hotel_view");
                          $hotelNumber=0;
                          foreach($hotels as &$hotel)
                          {
                              $hotelNumber++;
                          $address = $hotel ['HOTEL_STREET'].' '.$hotel['HOTEL_STREET_NO'].' '.$hotel['CITY_NAME'].' '. $hotel['HOTEL_POSTCODE'];  
                          ?>
                          
                      <tr></tr>
                          <th scope="row"><?php echo $hotelNumber; ?></th>
                          <td><?php echo $hotel['HOTEL_NAME']; ?></td>
                          <td><?php echo $address; ?></td>
                          <td><?php echo $hotel['HOTEL_PHONE']; ?></td>
                          <td><?php echo $hotel['HOTEL_EMAIL']; ?></td>
                          <td><?php echo $hotel['HOTEL_WEBSITE']; ?></td>

                          <td>
                              <a href="view_hotel2.php?action=viewhotel&id=<?php echo $hotel['HOTEL_ID']; ?>" class="btn btn-info">View</a>
                              <a href="edit_hotel.php?id=<?php echo $hotel['HOTEL_ID'];?>" class="btn btn-warning">Edit</a>
                              <a href="process.php?action=deletehotel&id=<?php echo $hotel['HOTEL_ID']; ?>" class="btn btn-danger">Delete</a>


                          </td>

                      </tbody>
                          <?php
                            
                          }
                            ?>      

                  </table>
            
            </div>
        </div>
      </div>
      
      
     <?php
	 include('bottom.php');
	 ?>
<?php }  else{
	header('Location:index.php');
	}?>