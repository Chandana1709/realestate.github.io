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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Userdashboard</title>
<style>
	.container{
		margin-top:8%;
	}
	.inner{
		overflow:hidden;
	}
	.inner img{
		transition:all 1.5s ease;
	}
	.inner:hover img{
		transform:scale(1.5);
	}
	h6{
     font-family:Roboto,sans-serif;

	}
</style>
</head>

	<body class="container">


		<h1 class="text-center text-danger mb-5" 
	style="font-family: 'Abril Fatface', cursive;"></h1>

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
	
<form method="post" action="http://localhost/project 2/index.php?property_id=<?php echo $row["property_id"];?>">


	
<div class="card shadow" style="width:20rem;">
	<div class="inner">
		 <img  class="card-img-top" src="<?php echo "http://localhost/".$row["images"]; ?>" width="200" height="200" alt="cart images" class="img-fluid mb-2">
		</div>
	 <div class="card-body text-center">
 

<h4 class="card-title"><?php echo $row["type_of_property"];?></h5>
<h6 class="card-text"><?php echo $row["seller_name"];?></h5>

</div>



<div class="btn-group d-flex">
						<a href="http://localhost/project2/pdetails.php?property_id=<?php echo $row["property_id"];?>" button class="btn btn-warning flex-fill text-white">View Details</a>

						
					</div>


</div>
</form>
</div>
	<?php		
		}
	}
	?>


</div>
<div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="userdash.php" class="nav__link nav__logo">
                       <i class='bx bxs-home-smile'></i> 
                        <span class="nav__logo-name">Home Genie</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="userdashboard.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="userviewprofile.php" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Profile</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="userviewprofile.php" class="nav__dropdown-item">View Profile</a>
                                        <a href="userupdateprofile.php" class="nav__dropdown-item">Update Profile</a>
                                        
                                    </div>
                                </div>
                            </div>

                            <a href="feed.php" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Feedback</span>
                            </a>
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Seller</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="sellerprop.<?php  ?>" class="nav__dropdown-item">Add Property</a>
                                        <a href="upsellertb.php" class="nav__dropdown-item">Update/Delete</a>
                                        
                                    </div>
                                </div>

                            </div>

                            <a href="cart.php" class="nav__link">
                                <i class='bx bx-library nav__icon' ></i> 
                                <span class="nav__name">Property Listing</span>
                            </a>
                            <a href="myaccount.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Interested</span>
                                
                                 <a href="usersideb1.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">News</span>
                            
                            </a>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="index.html" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
       

        <!--========== MAIN JS ==========-->
        
<script src="assets1/js/main.js"></script>
</body>
</html>