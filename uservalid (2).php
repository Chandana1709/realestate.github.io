<?php
 
         $conn=new mysqli("localhost","root","","realestate");
         if($conn->connect_error)
	     die("connection failed".$conn->connect_error);
         else
         echo" ";
	  
	     
		 
		 $user_id = $_POST['user_id'];
		 $password = $_POST['password'];
         $email="";
		 $sql = "SELECT * FROM user_reg WHERE user_id='$user_id' AND password='$password'";
		 $result = mysqli_query($conn , $sql);
		 if(mysqli_num_rows($result) > 0)
		 {
			    while($row = mysqli_fetch_assoc($result))
				{
                      
                      $user_id = $row["user_id"];
					  $email=$row["email_id"];
                      session_start();
					 
                      $_SESSION['user_id'] = $user_id;
					  $_SESSION['email'] = $email;
				}
				////////////////////////////////////////////
				 $sql = "SELECT * FROM userplan WHERE Email_id='$email'";
		 $result = mysqli_query($conn , $sql);
				
			    while($row = mysqli_fetch_assoc($result))
				{
                      
                      $sdate = $row["Plan_Start_Date"];
					  $edate=$row["Plant_End_Date"];
                      
					 
                      $_SESSION['sdate'] = $sdate;
					  $_SESSION['edate'] = $edate;
				}
				
				
				/////////////////////////////////////////////
                  header("Location:userdashboard.php");
		 }
         else
         {
          echo  "<script>alert('Invalid userid or password !')</script>";
		  echo  "<script>location.replace('login.html')</script>";
         

	     }

 ?>