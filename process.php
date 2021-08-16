<?php
require_once('lib/database.php');
if(!empty($_GET['action'])){
	switch($_GET['action']){
		case 'addhotel':
		$name=$_POST['hotel_name'];
		$desc=$_POST['hotel_desc'];
		$stars=$_POST['hotel_stars'];
		$phone=$_POST['hotel_phone'];
		$email=$_POST['hotel_email'];
		$website=$_POST['hotel_website'];
		$street=$_POST['hotel_street'];
		$street_no=$_POST['hotel_street_no'];
		$postcode=$_POST['hotel_postcode'];
		$city=$_POST['hotel_city'];
		
		$data=array(
			"HOTEL_ID"=>null,
			"HOTEL_NAME"=>$name,
			"HOTEL_DESCRIPTION"=>$desc,
			"HOTEL_STARS"=>$stars,
			"HOTEL_PHONE"=>$phone,
			"HOTEL_EMAIL"=>$email,
			"HOTEL_WEBSITE"=>$website,
			"HOTEL_STREET"=>$street,
			"HOTEL_STREET_NO"=>$street_no,
			"HOTEL_POSTCODE"=>$postcode,
			"HOTEL_CITY"=>$city,
		);
		$database=new Database();
		$database->insertRows("HOTEL",$data);
		
		
		$newHotelid=$database->getLastInsertedId();
		$imgcount=count($_FILES['hotel_images']['name']);
		
		for($i=0;$i<$imgcount;$i++){
			$targetDir='upload/';
			$basename=basename($_FILES['hotel_images']['name'][$i]);
			$targetFile=$targetDir . time() . $basename;
			
			$imageExtension=strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
			$imagecheck=getimagesize($_FILES['hotel_images']['tmp_name'][$i]);
			if($imagecheck !=false){
				if($imageExtension == 'jpg' || $imageExtension == 'jpeg'){
					if(move_uploaded_file($_FILES['hotel_images']['tmp_name'][$i],$targetFile)){
						$data = array(
							"IMAGE_ID" =>null,
							"IMAGE_FILE" =>$targetFile,
							"IMAGE_HOTEL" =>$newHotelid
						);
						$database->insertRows("IMAGE",$data);
					}
					else{
						echo 'sorry,there was a problem with your file.';
					}
				}
				else{
					echo 'The image needs to be a JPEG';
				}
			}
			else{
				echo'File is not an image';
			}
		}
		header('Location:home.php?added');
		break;
		case 'edithotel':
		   if(empty($_POST['hotel_id']) || !is_numeric($_POST['hotel_id']) || $_POST['hotel_id'] < 1 ){
			   die();
		   }
		$id=$_POST['hotel_id'];
		$name=$_POST['hotel_name'];
		$desc=$_POST['hotel_desc'];
		$stars=$_POST['hotel_stars'];
		$phone=$_POST['hotel_phone'];
		$email=$_POST['hotel_email'];
		$website=$_POST['hotel_website'];
		$street=$_POST['hotel_street'];
		$street_no=$_POST['hotel_street_no'];
		$postcode=$_POST['hotel_postcode'];
		$city=$_POST['hotel_city'];
		
		$data=array(
			"HOTEL_NAME"=>$name,
			"HOTEL_DESCRIPTION"=>$desc,
			"HOTEL_STARS"=>$stars,
			"HOTEL_PHONE"=>$phone,
			"HOTEL_EMAIL"=>$email,
			"HOTEL_WEBSITE"=>$website,
			"HOTEL_STREET"=>$street,
			"HOTEL_STREET_NO"=>$street_no,
			"HOTEL_POSTCODE"=>$postcode,
			"HOTEL_CITY"=>$city,
		);
		
		$where['HOTEL_ID']= '='.$id;
		$database=new Database();
		$database->updateRows("HOTEL",$data,$where);
		header('Location: home.php');
		break;
		
		case 'deletehotel':
		 if(empty($_GET['id']) || !is_numeric($_GET['id']) || $_GET['id'] < 1 ){
			   die();
		   }
		   $id=$_GET['id'];
		   $where['HOTEL_ID']= '='.$id;
		   $database=new Database();
		   $database->removeRows("HOTEL",$where);
		   header('Location: home.php');
		   break;
		  
		case 'deleteimage':
         		 if(empty($_GET['id']) || !is_numeric($_GET['id']) || $_GET['id'] < 1 ){
			   die();
		   }
            $id=$_GET['id'];		   
		    $where['IMAGE_ID']= '='.$id;
			$database=new Database();
			$database->removeRows("IMAGE",$where);
			unlink($image["IMAGE_FILE"]);
            header('Location: home.php');
		    break;
			
		case 'login':
		  
           $username=$_POST['uname'];
		   $password=$_POST['pwd'];
           $where['USERNAME']= "='".$username."'";
		   $where['PASSWORD']= "='".$password."'";
		   $database=new Database();
		   $user=$database->getRow("SIGNIN","*",$where, 'AND');	
		    

		   		  		   session_start();
           
		   
		   if($user['USERNAME']==$_POST['uname'] && $user['PASSWORD']==$_POST['pwd']){
			   $_SESSION['username']=$_POST['uname'];
			   header('Location:home.php');
		   }
		   else{
             header('Location:index.php');
		   }
		   
		   break;
		   
		case 'logout':
		    session_start();
			if(isset($_SESSION['username'])){
				session_destroy();
				header('Location:index.php');
			}
			else{
				header('Location:index.php');
			}
			break;
		

		case 'signin':
		
		  $name=$_POST['name'];
		  $surname=$_POST['sname'];
		  $email=$_POST['email'];
		  $username=$_POST['uname'];
		  $password=$_POST['pwd'];
		  
		  $signinarray=array(
		     "NAME"=>$name,
			 "SURNAME"=>$surname,
			 "EMAIL"=>$email,
			 "USERNAME"=>$username,
			 "PASSWORD"=>$password		  
		  );
		  
		$database=new Database();
		$database->insertRows("SIGNIN",$signinarray);
		
		header('Location:index.php');
		break;


	}
}
?>