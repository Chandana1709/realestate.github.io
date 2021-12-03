<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "realestate";

// Create connection
$conn = mysqli_connect("localhost","root","","realestate");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO property (pid, pname,pstatus,psize,cost,address,description,owner,ownercontactno,image)
VALUES ('101', 'apartment', 'ready for sale','1200sq.m','150lakh','malleshwaran','3bhk','deepa','9483367209','2.jpg')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>