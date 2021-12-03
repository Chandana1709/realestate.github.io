<html>
<body>
<?php

  /*$uid = $_POST["uid"];*/
   $adname = $_POST["adname"];
  $admin_id = $_POST["admin_id"];
  $admin_mobile_no=$_POST["admin_mobile_no"];
  $admin_email_id=$_POST["admin_email_id"];
  $admin_password=$_POST["admin_password"];

  

  $conn=new mysqli("localhost","root","","realestate");
  if($conn->connect_error)
   die("connection failed ".$conn->connect_error);
  else
   $query1="SELECT * FROM  admin_reg WHERE admin_id='$admin_id'";
 $row=mysqli_query($conn,$query1);
 if(mysqli_num_rows($row)>0){

      echo '<script>alert(" Admin Id already exists")</script>';
      echo file_get_contents("http://localhost/project 2/newadreg.html");
      exit();
     
 }else
  echo '<script>alert("Registered successfully")</script>';
echo file_get_contents("http://localhost/project 2/newadreg.html");
  // echo "<br> connection successful";
  $sql= "INSERT INTO admin_reg(adname,admin_id,admin_email_id,admin_mobile_no,admin_password) values ('" . $adname . "','" . $admin_id . "','" . $admin_email_id . "','" . $admin_mobile_no . "','" . $admin_password . "')";
  if($conn->query($sql)==TRUE)
    echo "new record created";
  else
    echo"error:".$sql."<br>" .$conn->error;
  ?>
  </body>









