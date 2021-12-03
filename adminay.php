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

$s="SELECT * FROM article ";

if ($r=mysqli_query($con,$s))
  {
  // Return the number of rows in result set
  $article=mysqli_num_rows($r);
 
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

$sq="SELECT * FROM property";

if ($re=mysqli_query($con,$sq))
  {
  // Return the number of rows in result set
  $propcount=mysqli_num_rows($re);
 
  // Free result set
  mysqli_free_result($re);
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

$sq="SELECT * FROM feedback";

if ($re=mysqli_query($con,$sq))
  {
  // Return the number of rows in result set
  $feedback=mysqli_num_rows($re);
 
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

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
		width: 30%;
		padding: 0 7px;
	}
		
	.row {
		margin: 0 5px;
	}
	
	.row:after {
		content: "";
		display:table;
		
	}
	
	/* Style the cards */
	.card {
		padding: 8px;
		text-align: center;
		background-color: #008080;
		color: white;
		margin-bottom:1.2em;
		}
		
	.card:hover {
		transform: scale(1.1);
		background-color:#0ABAB5;
		transition-duration: 2s;
		color: white;
	}
		
	.fa {
		font-size: 40px;
	}
	</style>

	
</head>

<body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bxs-user nav__icon'></i> 
                        <span class="nav__logo-name">Admin</span>
                    </a>

                    <div class="nav__list">
                        <a href="admindashboard.php" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="adminviewprofile.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Users</span>
                        </a>
                         <a href="adminay.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Overview</span>
                        </a>

                        
                        <a href="propadd.php" class="nav__link">
                            <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name"> Add Property </span>
                        </a>
                        
                            <a href="up2.php" class="nav__link">
                            <i class='bx bx-pencil nav__icon' ></i>
                            <span class="nav__name">Update/Delete</span></a>

                          
                      
                       <a href="newadreg.html" class="nav__link">
                            <i class='bx bx-user-plus nav__icon'></i> 
                            <span class="nav__name">Add Admin</span>
                        </a>

                          
                      <a href="fetch.php" class="nav__link">
                            <i class='bx bx-book-heart nav__icon'></i> 
                            <span class="nav__name">Favorites</span>
                        </a>

                        <a href="viewfeedback.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Feedback View</span>
                        </a>
                               
                        <a href="blog.php" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">Article </span>
                        </a>



                        <a href="home.html" class="nav__link">
                            <i class='bx bx-log-out nav__icon'></i>
                            <span class="nav__name">Logout</span>
                        </a>
                    </div>
                </div>

               
            </nav>
        </div>

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
				<h3><?php echo $article;?></h3>
				<p>Article</p>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<p><i class="fa fa-home"></i></p>
				<h3><?php echo $propcount;?></h3>

				
				<p>Total Property</p>
			</div>
		</div>


		<div class="column">
			<div class="card">
				<p><i class="fa fa-smile-o"></i></p>
				<h3><?php echo $feedback;?></h3>
				<p>Total Feedback</p>
			</div>
		</div>
	</div>
	<script src="assets/js/main.js"></script>

</body>

</html>					
