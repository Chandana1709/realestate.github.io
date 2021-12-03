<?php
session_start();
$pid=$_GET['pid'];
$conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)die("connection failed".$conn->connect_error);
 else
     echo" ";
   
if(isset($_GET['pid']))
 {
  //$sdate=$_SESSION['sdate'];
    //$edate=$_SESSION['edate'];
      $em=$_SESSION['email'];
    
    //echo $sdate."<br>".$edate;
  
$sql = "SELECT * from userplan WHERE current_date < plant_End_Date and email_id='{$em}' ";
//echo $sql;
$result = mysqli_query($conn , $sql);
$found=0;
if(mysqli_num_rows($result) > 0)
{

while($row = mysqli_fetch_assoc($result))
{
$found++;
}

////////////////////////////////////////////////////////
 if ($found==1)
 {
  $sql = "SELECT * from property WHERE property_id='$pid'";

$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{

while($row = mysqli_fetch_assoc($result))
{
  
$images = $row['images'];
$seller_name=$row['seller_name'];
$availability_status=$row['availability_status'];
$city=$row['city'];
$special_prop1=$row['special_prop1'];
$type_of_property=$row['type_of_property'];
 $no_of_bathroom=$row['no_of_bathroom'];
  $no_of_bedroom=$row['no_of_bedroom'];
  $other_rooms=$row['other_rooms'];
  $balconies=$row['balconies'];
  $parking=$row['parking'];
  $total_no_of_floor=$row['total_no_of_floor'];
  $floor_no=$row['floor_no'];
  $age_of_property=$row['age_of_property'];
$m=$row['MobileNo'];
$c=$row['COST_OF_THE_PROPERTY'];
$s=$row['SIZE_OF_PROPERTY'];


}
}
 
 }
 
 
?>
<?php


//if(isset($_GET['user_id']))     
//            {
//                 $user_id=$_GET['user_id'];
//                 date_default_timezone_set('Asia/Kolkata');
//                 $date = date('d-m-y h:i:s');
//                /* echo $date;
//                /*$time=date("d-m-Y");*/
//
//                $sql="insert into interested values ('".$user_id."',".$property_id.",'".$date."')";
//                if($conn->query($sql)==TRUE)
//    echo "YOUR INTERESTED IS RECORDED";
//  else
//    echo"error:".$sql."<br>" .$conn->error;
//                          }
//                        
//                 mysqli_close($conn);
                ?> 


    

                                
           
 


<html>
<head>
  <head>
   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Userdashboard</title>
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
</head>
<body>
  <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="userdashboard.php" class="nav__link nav__logo">
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
                                        <a href="sellerprop.php" class="nav__dropdown-item">Add Property</a>
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
                            </a>
                             <a href="usersideb1.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">News</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="home.html" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
   
    
    
 

<main class="container">
 
  <!-- Left Column / Headphones Image -->
  <div class="left-column">
   
     <img src="<?php echo "http://localhost/".$images?>"class="active"  alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Property details</span>

     
      <h1><?php  echo $type_of_property?></h1>
      <h2>Name: <?php  echo $seller_name?></h2>
      <h2>Place: <?php echo $city?></h2>
     <p>Speciality of Property: <?php echo $special_prop1?></p>
     <p>Availability Status:<?php  echo $availability_status?></p>
     <p>No Of Bedrooms:<?php echo $no_of_bedroom?></p>
      <p>No Of Bathroom:<?php echo $no_of_bathroom?></p>
      <p>Other Rooms:<?php echo $other_rooms?></p>
      <p>Balconies:<?php echo $balconies?></p>
      <p>Parking:<?php echo $parking?></p>
      <p>Total No Of Floor:<?php echo $total_no_of_floor?></p>
      <p>Floor No:<?php echo $floor_no?></p>
      <p>Age of The Property:<?php echo $age_of_property?></p>
      
<!-- <p>Property Id : <?php   $pid=$_GET["pid"];  ?>-->
    <p>Mobile : <?php   echo $m;  ?>
     <p>Size : <?php  echo $s;    ?>
      <p>Cost : <?php  echo $c;   
    
    }
    else
    {
      //$msg="Sorry ,You Dont have subscription";
    //echo "sorry";
  //  echo "<script type='text/javascript'> window.alert ('$msg');</script>";
  echo '<script>alert("Sorry ,You Dont have subscription");window.location="cart.php";</script>';

    }
    }
     ?>
   
    
    </div>
 
    <!-- Product Configuration 
    <div class="product-configuration">
 
      
      <div class="product-color">
        <span>Color</span>
 
       < <div class="color-choose">
          <div>
            <input data-image="red" type="radio" id="red" name="color" value="red" checked>
            <label for="red"><span></span></label>
          </div>
          <div>
            <input data-image="blue" type="radio" id="blue" name="color" value="blue">
            <label for="blue"><span></span></label>
          </div>
          <div>
            <input data-image="black" type="radio" id="black" name="color" value="black">
            <label for="black"><span></span></label>
          </div>
        </div>

 
      </div>
 -->
      <!-- Cable Configuration -->
   <!--   <div class="cable-config">
        <span>Cable configuration</span>
 
        <div class="cable-choose">
          <button>Straight</button>
          <button>Coiled</button>
          <button>Long-coiled</button>
        </div>
 
        <a href="#">How to configurate your headphones</a>
      </div>
    </div>
 -->
    <!-- Product Pricing -->
    <div class="product-price">
     
    


     
    </div>
  </div>
</main>
<script src="assets1/js/main.js"></script> 
<script>
$(document).ready(function() {
 
  $('.color-choose input').on('click', function() {
      var headphonesColor = $(this).attr('data-image');
 
      $('.active').removeClass('active');
      $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
      $(this).addClass('active');
  });
 
});

</script>

   


</body>
</html>