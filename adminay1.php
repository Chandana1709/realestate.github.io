<?php
$con=mysqli_connect("localhost","root","","realestate");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM user_reg";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 
  // Free result set
  mysqli_free_result($result);
  }
  mysqli_close($con);
?>
<?php
$con=mysqli_connect("localhost","root","","realestate");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$s="SELECT user_id,COUNT(*) FROM property Where user_id IS NOT NULL";

if ($r=mysqli_query($con,$s))
  {
  // Return the number of rows in result set
  $propcount=mysqli_num_rows($r);
 
  // Free result set
  mysqli_free_result($r);
  }
  mysqli_close($con);
?>
<?php
$con=mysqli_connect("localhost","root","","realestate");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sq="SELECT admin_id,COUNT(*) FROM property ";

if ($re=mysqli_query($con,$sq))
  {
  // Return the number of rows in result set
  $propcounts=mysqli_num_rows($re);
 
  // Free result set
  mysqli_free_result($re);
  }
  mysqli_close($con);
?>


<!DOCTYPE html>
<html>

<head>
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	<style>
	h1 {
		color: green;
	}
		
	* {
		box-sizing: border-box;
	}
		
	body {
		text-align: center;
	}
	
	/* Float columns */
	.column {
		float: left;
		width: 33%;
		padding: 0 5px;
	}
		
	.row {
		margin: 0 -5px;
	}
	
	.row:after {
		content: "";
		display: table;
	}
	
	/* Style the cards */
	.card {
		padding: 10px;
		text-align: center;
		background-color: gray;
		color: white;
		}
		
	.card:hover {
		transform: scale(1.1);
		background-color: black;
		transition-duration: 2s;
		color: white;
	}
		
	.fa {
		font-size: 50px;
	}
	</style>

	
</head>

<body>
	<h1></h1>
	<strong></strong>
	<br><br>
	<div class="row">
		<div class="column">
			<div class="card">
				<p><i class="fa fa-user"></i></p>
				<h3><?php echo $rowcount;?></h3>
				<p>Registered User</p>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<p><i class="fa fa-book"></i></p>
				<h3><?php echo $propcount;?></h3>
				<p>Seller Property</p>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<p><i class="fa fa-smile-o"></i></p>
				<h3></h3>
				<p>Admin Property</p>
			</div>
		</div>
	</div>
</body>

</html>					
