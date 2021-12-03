<?php
	$conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
else
 echo"<br>connection successfull";
$sql="CREATE TABLE interested1(
    
	user_id VARCHAR(15) NOT NULL,
    property_id VARCHAR(15) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	FOREIGN KEY(user_id) references user_reg(user_id),FOREIGN KEY(property_id)references property(property_id)
	
	)";

if(mysqli_query($conn,$sql))
	echo"<br>table created";
else
	echo"Could not create the table".mysqli_error($conn);
   mysqli_close($conn);
?>