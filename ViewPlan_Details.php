<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Art Factory HTML CSS Template</title>
<!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets3/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets3/css/owl-carousel.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
     
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">Home Genie</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                <ul class="nav">
                            <li class="scroll-to-section"><a href="newreg.html" class="active">User SignUp</a></li>
                            <li class="scroll-to-section"><a href="adminlogin.html">Admin Login</a></li>
                            <li class="scroll-to-section"><a href="aboutus.html">About Us </a></li>
                            <li class="scroll-to-section"><a href="contactus.html">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>                      </a>
                      <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                   
                   <marquee>Subscribe to Our Plans here...</marquee>
<?php

session_start();
include('dbcon.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM plan");// WHERE `code`='$code'");
//$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['Plan_Description'];
$code = $row['Plan_id'];
$price = $row['Plan_Amount'];
$duration = $row['Duration'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>

      
      <?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
        </p>
  </div>
  <div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}

$result = mysqli_query($con,"SELECT * FROM plan");
while($row = mysqli_fetch_assoc($result)){
$a=$row["Plan_id"];
$b=$row["Plan_Description"];
$c=$row["Plan_Duration"];
$d=$row["Plan_Amount"];
		echo "<div class='product_wrapper'>
			  PLAN-$a
			  <form method='post' action='ViewPlan_Details1.php?a=$a&b=$b&c=$c&d=$d'>
			  <input type='hidden' name='code' value=".$row['Plan_id']." />
			
			   <div class='image'><img src='subscribelogo.jpg' width=150 height=150 /></div>
			    <div class='name'>Plan Duration-".$row['Plan_Duration']."</div>
			  <div class='name'>Plan Description-".$row['Plan_Description']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		   	  <div class='price'>Plan Amount-Rs.".$row['Plan_Amount']."</div>
			  <button type='submit' class='buy'>SubScribe Now...</button>
			  </form>
		   	  </div>";
        }
mysqli_close($con);
?>


                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


   
    <!-- ***** Features Small End ***** -->


    <!-- ***** Frequently Question Start ***** -->
   
    <!-- jQuery -->
    <script src="assets3/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets3/js/popper.js"></script>
    <script src="assets3/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets3/js/owl-carousel.js"></script>
    <script src="assets3/js/scrollreveal.min.js"></script>
    <script src="assets3/js/waypoints.min.js"></script>
    <script src="assets3/js/jquery.counterup.min.js"></script>
    <script src="assets3/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="assets3/js/custom.js"></script>




<br /><br />
<!--<a href="https://www.allphptricks.com/simple-shopping-cart-using-php-and-mysql/"><strong>Tutorial Link</strong></a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/"><strong>AllPHPTricks.com</strong></a>-->
</div>
</body>
</html>