<?php 

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
   $sql="INSERT INTO feedback(user_id ,fname,femail,phone,feedback,suggestions) values('".$_POST["user_id"]."','".$_POST["fname"]."','".$_POST["femail"]."','".$_POST["phone"]."','".$_POST["feedback"]."','".$_POST["suggestions"]."')";
	
if (mysqli_query($conn,$sql))

	              echo  "<script>alert('Thank You..! Your Feedback is Valuable to Us!')</script>";
                  echo "<script>location.replace('feed.php')</script>";
	}
    	
else{
		echo  "<script>alert('Your userid is incorrect! Please try again')</script>";
		echo "<script>location.replace('feed.php')</script>";
		
}

?>
