  <?php
  $conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
else
 echo" ";

      $user_id=$_POST['user_id'];
      $query="SELECT * FROM user_reg where user_id='$user_id'";
      $query_run=mysqli_query($conn,$query);
	  $row=mysqli_fetch_array($query_run);
  ?>
        
		
		<?php
      if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email_id = $_POST['email_id'];
        $mobile_no= $_POST['mobile_no'];

        
		
    $user_id=$_REQUEST["user_id"];
	$sql="SELECT * FROM user_reg WHERE user_id='$user_id'";
	$result=mysqli_query($conn,$sql); 
	$row=mysqli_fetch_array($result);
	if($row["user_id"] == $user_id){
 
      $sql = "UPDATE user_reg SET name='$name',
	                                  email_id='$email_id',
	                                  mobile_no='$mobile_no'
									  
	                                  where user_id='$user_id'";
                  if (mysqli_query($conn,$sql))
	              echo  "<script>alert('Profile updated successfully!')</script>";
                  echo "<script>location.replace('userviewprofile.php')</script>";
	}
    	
else{
		echo  "<script>alert('Your userid is incorrect. Please try again')</script>";
        echo "<script>location.replace('userviewprofile.php')</script>";
		
}
?>
	  <?php
	  }
    ?>
                     

                     
      