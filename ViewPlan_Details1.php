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
     <style>

    /* Basic Styling */
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}
 
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}
/* Basic Styling */
.left-column {
  width: 65%;
  position: relative;
}
 
.right-column {
  width: 40%;
  margin-top: 60px;
}
.left-column img {
  width: 85%;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  transition: all 0.3s ease;
}
 
.left-column img.active {
  opacity: 1;
}
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description h1 {
  font-weight: 200;
  font-size: 45px;
  color: #43484D;
  letter-spacing: -2px;
  }
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}
.product-color {
  margin-bottom: 30px;
}
 
.color-choose div {
  display: inline-block;
}
 
.color-choose input[type=&amp;quot;radio&amp;quot;] {
  display: none;
}
 
.color-choose input[type=&amp;quot;radio&amp;quot;] + label span {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
  border-radius: 50%;
}
 
.color-choose input[type=&amp;quot;radio&amp;quot;] + label span {
  border: 2px solid #FFFFFF;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
}
 
.color-choose input[type=&amp;quot;radio&amp;quot;]#red + label span {
  background-color: #C91524;
}
.color-choose input[type=&amp;quot;radio&amp;quot;]#blue + label span {
  background-color: #314780;
}
.color-choose input[type=&amp;quot;radio&amp;quot;]#black + label span {
  background-color: #323232;
}
 
.color-choose input[type=&amp;quot;radio&amp;quot;]:checked + label span {
  background-image: url(images/check-icn.svg);
  background-repeat: no-repeat;
  background-position: center;
}

.cable-choose {
  margin-bottom: 20px;
}
 
.cable-choose button {
  border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color: #5E6977;
  background-color: #fff;
  cursor: pointer;
  transition: all .5s;
}
button{
border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color:white;
  background-color:#CCEEFF;
  cursor: pointer;
  transition: all .5s;
} 
.cable-choose button:hover,
.cable-choose button:active,
.cable-choose button:focus {
  border: 2px solid #86939E;
  outline: none;
}
 
.cable-config {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
 
.cable-config a {
  color: #358ED7;
  text-decoration: none;
  font-size: 12px;
  position: relative;
  margin: 10px 0;
  display: inline-block;
}
.cable-config a:before {
  content: &amp;quot;?&amp;quot;;
  height: 15px;
  width: 15px;
  border-radius: 50%;
  border: 2px solid rgba(53, 142, 215, 0.5);
  display: inline-block;
  text-align: center;
  line-height: 16px;
  opacity: 0.5;
  margin-right: 5px;
  .product-price {
  display: flex;
  align-items: center;
}
 
.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}
 
.cart-btn {
  display: inline-block;
  background-color:white;
  border-radius: 6px;
  font-size: 16px;
  color:white ;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn:hover {
  background-color:blue;
}
  </style>
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
                   
                   <marquee>You are about to Subscribe to Our Plans here...</marquee>
  
     
        <form action="" method="POST" >
      
        <label><b>Plan Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
        <input type ="text" name="a" id="a"  value="<?php  $id=$_GET["a"]; echo $id; ?>" readonly><br>
      
         
        <label><b>Plan Description  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
        <input type ="text" name="b" id="b"  value="<?php  $id1=$_GET["b"]; echo $id1; ?>" readonly><br>
      
       
       <label><b>Plan Duration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></label>
       <input type ="text" name="c" id="c"  value="<?php  $id2=$_GET["c"]; echo $id2; ?>" readonly><br>
      
      <label><b>Plan Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type ="text" name="d" id="d"  value="<?php  $id3=$_GET["d"]; echo $id3; ?>" readonly><br>
	  
	    <label><b>Plan Start Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type ="text" name="e" id="e"  value="<?php $doi=date("Y/m/d"); echo $doi; ?>" readonly><br>
	  
	    <label><b>Plan End Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type ="text" name="f" id="f"  value="<?php $doi1=date('Y-m-d', strtotime($doi. ' + '.$id2.' days')); echo $doi1; ?>" readonly><br>
	   <label><b>CARD NO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type ="text" name="f1" id="f1"  required><br>
	   <label><b>CARD EXPIRY DATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type ="text" name="f2" id="f2"  required><br>
	   <label><b>CVV NO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type ="text" name="f3" id="f3"  required><br>
	   <label><b>EMAIL-ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type ="email" name="g" id="g"  required><br>
      </div>
	  <input type="submit" name="Submit" value="Subscribe Me..">

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





/*$sql="select * from user where  email='{$f}'";
$found=0;
$result=$con->query($sql);
if($result ->num_rows == 1)
{	
	$found=1;
}
	
	if($found==0)
	{
	
	*/
$query = "insert into userplan  values('$a','$b','$c','$d','$e','$f','$g')";


//echo $query;
mysqli_query($con,$query);
	$msg="Plan Registered Successfully..." ;
		echo "<script type='text/javascript'> window.alert ('$msg');</script>";
/*echo "<h3 align = center>Registered successfully </h3>";*/
/*}
else
{
		echo("<h4 align=center>Sorry ,User already Registered...</h4>");		
}
*/
}
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