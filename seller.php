<?php
/*
	$conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
else
 echo"<br>connection successfull";
$sql="CREATE TABLE seller_property(
   user_id VARCHAR(15) NOT NULL,
  seller_property_id int(20) NOT NULL,
  seller_full_name text NOT NULL,
  seller_city text NOT NULL,
  seller_type_of_property text NOT NULL,
  seller_no_of_bedroom varchar(25) NOT NULL,
  seller_no_of_bathroom varchar(25) NOT NULL,
  seller_other_rooms varchar(25) NOT NULL,
  seller_balconies varchar(25) NOT NULL,
  seller_reserved_parking varchar(25) NOT NULL,
  seller_total_no_of_floor varchar(25) NOT NULL,
  seller_floor_no varchar(25) NOT NULL,
  seller_availability_status text NOT NULL,
  seller_age_of_property varchar(25) NOT NULL,
  seller_phone_no varchar(10) NOT NULL,
  seller_images varchar(300) NOT NULL,
  seller_special_prop2 longtext NOT NULL,
  FOREIGN KEY(user_id) references user_reg(user_id)
)";
if(mysqli_query($conn,$sql))
	echo"<br>table created";
else
	echo"Could not create the table".mysqli_error($conn);
   mysqli_close($conn);
?>
*/
<?php

  if(isset($_POST['submit'])){
    $target="project2/".basename($_FILES['seller_images']['name']);
  $seller_full_name=$_POST["seller_full_name"];
  $seller_city=$_POST["seller_city"];
  $seller_type_of_property=$_POST["seller_type_of_property"];
  $seller_no_of_bedroom=$_POST["seller_no_of_bedroom"];
  $seller_no_of_bathroom=$_POST["seller_no_of_bathroom"];
  $seller_other_rooms=$_POST["seller_other_rooms"];
  $seller_balconies=$_POST["seller_balconies"];
  $seller_reserved_parking=$_POST["seller_reserved_parking"];
  $seller_total_no_of_floor=$_POST["seller_total_no_of_floor"];
  $seller_floor_no=$_POST["seller_floor_no"];
  $seller_availability_status=$_POST["seller_availability_status"];
  $seller_age_of_property=$_POST["seller_age_of_property"];
  $seller_phone_no=$_POST["seller_phone_no"];
  
   $seller_images = "project 2/".$_FILES['seller_images']['name'];
 $seller_special_prop1=$_POST["seller_special_prop1"];




  

 $conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
 else
     echo" ";
 $user_id=$_REQUEST["user_id"];
	$sql="SELECT * FROM user_reg WHERE user_id='$user_id'";
	$result=mysqli_query($conn,$sql); 
	$row=mysqli_fetch_array($result);
	
	if($row["user_id"] == $user_id){
 
    
  
  $sql= "INSERT INTO property1(user_id,seller_full_name,seller_city,seller_type_of_property,seller_no_of_bedroom,seller_no_of_bathroom,seller_other_rooms,seller_balconies,seller_reserved_parking,seller_total_no_of_floor,seller_floor_no,seller_availability_status,seller_age_of_property,seller_phone_no,seller_images,seller_special_prop1) values ('" . $seller_full_name . "','" . $seller_full_name . "','" . $seller_city . "','" . $seller_type_of_property . "','" . $seller_no_of_bedroom . "','" .$seller_no_of_bathroom . "','" .$seller_other_rooms . "','" .$seller_balconies . "','" .$seller_reserved_parking . "','" .$seller_total_no_of_floor . "','" .$seller_floor_no . "','" .$seller_availability_status . "','" .$seller_age_of_property . "','" .$seller_phone_no . "','" .$seller_images . "','" .$seller_special_prop1. "')";

  if (mysqli_query($conn,$sql)){
	         echo  "<script>alert(' Propery added successfully!')</script>";    
			 echo "<script>location.replace('seller_home.php')</script>";
                  
	}
    	
else{
		echo  "<script>alert('Your userid is incorrect! Please try again')</script>";
        echo "<script>location.replace('seller_home1.php')</script>";
	}	
  ?>




