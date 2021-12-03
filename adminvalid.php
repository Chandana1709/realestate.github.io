<?php
 
         $conn=new mysqli("localhost","root","","realestate");
         if($conn->connect_error)
	     die("connection failed".$conn->connect_error);
         else
         echo" ";
	  
	     
		 
		 $admin_id = $_POST['admin_id'];
		 $admin_password = $_POST['admin_password'];
         
		 $sql = "SELECT * FROM admin_reg WHERE admin_id='$admin_id' AND admin_password='$admin_password'";
		 $result = mysqli_query($conn , $sql);
		 if(mysqli_num_rows($result) > 0)
		 {
			    while($row = mysqli_fetch_assoc($result))
				{
                      
                      $admin_id = $row["admin_id"];
                      session_start();
					 
                      $_SESSION['admin_id'] = $admin_id;
				}
                  header("Location:admindashboard.php");
		 }
         else
         {
          echo  "<script>alert('Invalid adminid or password !')</script>";
		  echo  "<script>location.replace('adminlogin.html')</script>";
         

	     }

 ?>