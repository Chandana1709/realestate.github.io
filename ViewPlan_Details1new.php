<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action=""  method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i>Plan Id </label>
            <input type="text" name="a" id="a"  value="<?php  $id=$_GET["a"]; echo $id; ?>" readonly> 
            <label for="email"><i class="fa fa-envelope"></i> Plan Description </label>
            <input type="text" name="b" id="b"  value="<?php  $id1=$_GET["b"]; echo $id1; ?>" readonly >
            <label for="adr"><i class="fa fa-address-card-o"></i> Plan Duration </label>
            <input type="text" name="c" id="c"  value="<?php  $id2=$_GET["c"]; echo $id2; ?>" readonly >
            <label for="city"><i class="fa fa-institution"></i> Plan Amount </label>
            <input type="text" name="d" id="d"  value="<?php  $id3=$_GET["d"]; echo $id3; ?>" readonly >

            <div class="row">
              <div class="col-50">
                <label for="state">Plan Starting Date </label>
                <input type="text"  name="e" id="e"  value="<?php $doi=date("Y/m/d"); echo $doi; ?>" readonly>
              </div>
              <div class="col-50">
                <label for="zip">Plan Ending Date </label>
                <input type="text" name="f" id="f"  value="<?php $doi1=date('Y/m/d', strtotime($doi. ' + '.$id2.' days')); echo $doi1; ?>" readonly >
              </div>
              
			   <div class="col-50">
                <label for="zip">Email Id </label>
                <input type="text" name="g" id="g"  required >
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" name="Submit" class="btn">
      </form>
	  
	  <?php include "dbcon.php" ?>
      <?php 

if (isset($_POST['Submit']))
{

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
$e=$_POST["e"];
$f=$_POST["f"];
$g=$_POST["g"];





$sql="select * from user_reg where  email_id='{$g}'";

$found=0;
$result=$con->query($sql);
if($result ->num_rows == 1)
{	
	$found=1;
}
	
	if($found==1)
	{
	
	
$query = "insert into userplan  values('$a','$b','$c','$d','$e','$f','$g')";


//echo $query;
mysqli_query($con,$query);
	//$msg="Plan Registered Successfully..." ;
		//echo "<script type='text/javascript'> window.alert ('$msg');</script>";
		
		echo '<script>alert("Plan Registered Successfully...");window.location="login.html";</script>';
	
}
else
{
echo '<script>alert("Sorry ,Invalid Email-id,Please Register with Us...");window.location="ViewPlan_Details1new.php";</script>';
}
header('Location:pay.php?amt='.$d);
		
}
?>
    </div>
  </div>

</div>

</body>
</html>
