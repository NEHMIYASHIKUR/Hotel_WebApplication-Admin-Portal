<?php
session_start();
if(isset($_SESSION['username'])){
?>

<?php 
include("header.php");
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
                        
                          <?php
						  $b=0;
						  $username2=$_POST['searchinput'];
                          $where['HOTEL_NAME']= "LIKE '%".$username2."%'";
						  $database=new Database();
						  $hotels = $database->getRows("hotel_view","*",$where, 'AND');
                          $hotelNumber=0;
                          foreach($hotels as &$hotel)
                          {
                            $hotelNumber++;
                        $address = $hotel ['HOTEL_STREET'].' '.$hotel['HOTEL_STREET_NO'].' '.$hotel['CITY_NAME'].' '. $hotel['HOTEL_POSTCODE']; 

							
						  
                          ?>
						  

                      <tbody>
						  
                          
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

<?php 
include("bottom.php");
?>

<?php }  else{
	header('Location:index.php');
	}?>