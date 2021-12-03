<html>
<head>
<form action="index.php" method="post">

<title>FIND YOUR PROPERTY</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device=width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Userdashboard</title>


</head>
<body class="container" style="background-color: #fefbd8;">
 
	<style>
.button {
  background-color: 009999; /* Green */
   border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {font-size: 16px;}
</style>
<center>
<h1>
<h2  style=" width: 40%; color: black; margin-bottom: 50px;"><u>FIND YOUR PROPERTY</u></h2>
<a class="fa fa-arrow-left" href="userdashboard.html" style="font-size:50px; color: black; margin-left: -130%; margin-top :-50px;text-decoration: none;" ></a>

<div class="row">

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

$connection= new mysqli($servername, $username, $password, $dbname);

$query = " SELECT * FROM property ORDER BY property_id ASC ";
$result = mysqli_query($connection, $query);
$num = mysqli_num_rows($result);
if($num > 0)
{

while($row = mysqli_fetch_array($result))
{
?>

<div class="col-lg-3 col-md-3 col-sm-12">
<form method="post" action="http://localhost/project2/index.php?property_id=<?php echo $row["property_id"];?>">
<div style="border:3px solid #555; background-color: #ffffff; border-radius:5px; padding: 16px;" align="center">
 <img src="<?php echo "http://localhost/".$row["images"]; ?>" width="200" height="200" alt=""></h6>
 
<h6 class="text-info"><?php echo $row["type_of_property"];?></h6>
<h6 class="text-info"><?php echo $row["special_prop1"];?></h6>
<input type="hidden" name="hidden_name"  value="<?php echo $row["type_of_property"]; ?>" />
<input type="hidden" name="hidden_price"  value="<?php echo $row["special_prop1"];?>" />
<!--<input type="submit" class="btn btn-success" name="interested" style="margin-top:15px;" value="interested"/>-->
<a href="http://localhost/project 2/index.php?property_id=<?php echo $row["property_id"];?>" button class="button button3">View Details</a>
</div>



 




</form>
</div>

<?php
}
}
?>

</div>
</center>
</form>
<script src="assets/js/main.js"></script>
</body>
</html>
