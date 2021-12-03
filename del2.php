<?php
$servername="localhost";
$username="root";
$password="";
$database="realestate";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("connection failed <br>" .$conn->connect_error);
}
else{
	echo"connection success <br>";
}
$PID=$_GET['seller_property_id'];
$query=mysqli_query($conn,"delete from seller_property where seller_property_id='$PID'");
$data=mysqli_query($conn,$query);
if($data)
{
	echo"record deleted from database";
}
else
{
	echo"failed to deleted record from database";
}
header("location:upsellertb.php");
echo"<script>alert('record deleted from database')</script>"
?>