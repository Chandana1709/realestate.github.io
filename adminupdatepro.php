  <?php
  $conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
else
 echo" ";

      $admin_id=$_POST['admin_id'];
      $query="SELECT * FROM admin_reg where admin_id='$admin_id'";
      $query_run=mysqli_query($conn,$query);
	  $row=mysqli_fetch_array($query_run);
  ?>
        
		
		<?php
      if(isset($_POST['submit'])){

        $adname = $_POST['adname'];
        $admin_email_id = $_POST['admin_email_id'];
        $admin_mobile_no= $_POST['admin_mobile_no'];

        
		
    $admin_id=$_REQUEST["admin_id"];
	$sql="SELECT * FROM admin_reg WHERE admin_id='$admin_id'";
	$result=mysqli_query($conn,$sql); 
	$row=mysqli_fetch_array($result);
	if($row["admin_id"] == $admin_id){
 
      $sql = "UPDATE admin_reg SET adname='$adname',
	                                  admin_email_id='$admin_email_id',
	                                  admin_mobile_no='$admin_mobile_no'
									  
	                                  where admin_id='$admin_id'";
                  if (mysqli_query($conn,$sql))
	              echo  "<script>alert('Profile updated successfully!')</script>";
                  echo "<script>location.replace('adminviewprofile.php')</script>";
	}
    	
else{
		echo  "<script>alert('Your adminid is incorrect. Please try again')</script>";
        echo "<script>location.replace('adminviewprofile.php')</script>";
		
}
?>
	  <?php
	  }
    ?>
                     

                     
      