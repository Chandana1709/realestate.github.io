<?php
$servername="localhost";
$username="root";
$password="";
$database="realestate";

$conn=new mysqli($servername,$username,$password,$database);
if ($conn->connect_error){
	die("connection failed <br>" .$conn->connect_error);
}
else{
	echo "connection sucess <br>";
}


//$sql="create table Interested  (pid varchar(20) NOT NULL,uid varchar(10),logintime time(6))";


$conn->close();

// Set the new timezone
/*date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');
echo $date;*/

?>