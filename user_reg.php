<html>
<body>
<?php

  /*$uid = $_POST["uid"];*/
   $name = $_POST["name"];
  $user_id = $_POST["user_id"];
  $mobile_no=$_POST["mobile_no"];
  $email_id=$_POST["email_id"];
  $password=$_POST["password"];
 $reg_date = date('y-m-d');
  

  $conn=new mysqli("localhost","root","","realestate");
  if($conn->connect_error)
   die("connection failed ".$conn->connect_error);
  else
   $query1="SELECT * FROM  user_reg WHERE user_id='$user_id' AND email_id='$email_id'";
 
 $row=mysqli_query($conn,$query1);
  
 if(mysqli_num_rows($row)>0){
 

      echo '<script>alert(" User Id or Email Id already exists try something else...")</script>';
      echo file_get_contents("http://localhost/project2/newreg.php");
      exit();
     
 }

 else
 echo '<script>alert("Registered successfully and You have been activated with a trial Package");window.location="login.html";</script>';

//echo file_get_contents("http://localhost/project 2/login.html");
  // echo "<br> connection successful";
 // $sql= "INSERT INTO user_reg(name,user_id,email_id,mobile_no,password,reg_date) values ('" . $name . "','" . $user_id . "','" . $email_id . "','" . $mobile_no . "','" . $password . "','" . $reg_date . "')";
    $sql= "INSERT INTO user_reg(name,user_id,email_id,mobile_no,password) values ('" . $name . "','" . $user_id . "','" . $email_id . "','" . $mobile_no . "','" . $password . "')";

  if($conn->query($sql)==TRUE)
   {
    echo "";
	
	$doi=date("Y/m/d"); echo $doi;
	 $doi1=date('Y/m/d', strtotime($doi. '15 days'));
	$query = "insert into userplan  values('1','BASIC_PLAN','15','0','$doi','$doi1','$email_id')";
	echo  $query;
	mysqli_query($conn,$query);
	}
  else
  {
    echo"error:".$sql."<br>" .$conn->error;
	}
  ?>
  </body>









