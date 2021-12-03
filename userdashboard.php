<?php
$conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)
  die("connection failed".$conn->connect_error);
 else
     echo" ";
session_start();
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM user_reg WHERE user_id='$user_id'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
$name=$row['name'];
$user_id=$row['user_id'];
$email_id=$row['email_id'];
$mobile_no=$row['mobile_no'];
$password=$row['password'];

  }
  
}
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Userdashboard</title>


 
 

 
<style>
main{
 width: 100%;
 display: flex;
 justify-content: space-between;
 align-items: center;
}

main .right-sec{
 padding-right: 70px;
}

main .left-sec{
 padding-left: 100px;
}

.left-sec h2{
 font-size: 20px;
 text-transform: capitalize;
 font-weight: lighter;
 color: #242424;
 margin-top: 100px;
}

.left-sec h1{
 font-size: 50px;
 text-transform: capitalize;
 font-weight: 700;
 margin: 15px 0;
}

.left-sec p{
 margin-bottom: 20px;
}

.left-sec button{
 padding: 15px 45px;
 text-align: center;
 font-size: 14px;
 color: #fff;
 border: none;
 background-image: linear-gradient(to right,#649bff,#0070fa,#649bff);
 border-radius: 10px;
}

 $colors:
  hsla(337, 84, 48, 0.75)
  hsla(160, 50, 48, 0.75)
  hsla(190, 61, 65, 0.75)
  hsla( 41, 82, 52, 0.75);
$size: 2.5em;
$thickness: 0.5em;

// Calculated variables.
$lat: ($size - $thickness) / 2;
$offset: $lat - $thickness;

.loader {
  position: relative;
  width: $size;
  height: $size;
  transform: rotate(165deg);
  
  &:before,
  &:after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    display: block;
    width: $thickness;
    height: $thickness;
    border-radius: $thickness / 2;
    transform: translate(-50%, -50%);
  }
  
  &:before {
    animation: before 2s infinite;
  }
  
  &:after {
    animation: after 2s infinite;
  }
}

@keyframes before {
  0% {
    width: $thickness;
    box-shadow:
      $lat (-$offset) nth($colors, 1),
      (-$lat) $offset nth($colors, 3);
  }
  35% {
    width: $size;
    box-shadow:
      0 (-$offset) nth($colors, 1),
      0   $offset  nth($colors, 3);
  }
  70% {
    width: $thickness;
    box-shadow:
      (-$lat) (-$offset) nth($colors, 1),
      $lat $offset nth($colors, 3);
  }
  100% {
    box-shadow:
      $lat (-$offset) nth($colors, 1),
      (-$lat) $offset nth($colors, 3);
  }
}

@keyframes after {
  0% {
    height: $thickness;
    box-shadow:
      $offset $lat nth($colors, 2),
      (-$offset) (-$lat) nth($colors, 4);
  }
  35% {
    height: $size;
    box-shadow:
        $offset  0 nth($colors, 2),
      (-$offset) 0 nth($colors, 4);
  }
  70% {
    height: $thickness;
    box-shadow:
      $offset (-$lat) nth($colors, 2),
      (-$offset) $lat nth($colors, 4);
  }
  100% {
    box-shadow:
      $offset $lat nth($colors, 2),
      (-$offset) (-$lat) nth($colors, 4);
  }
}



/**
 * Attempt to center the whole thing!
 */


body {
  height: 100%;
  font-family: montserrat;
  background-image: url('');
   width: 100%;
 height: 100vh;
 background-repeat: no-repeat;
}

 
h1{color:#33a2a2;
   font-size:2.5em;
}
.font1{
  font-size:1.5em;
  color:black;
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

                <a href="index.html" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
       

        <!--========== MAIN JS ==========-->
        
   
 
        <!--===== MAIN JS =====-->
        
    
   
  




 <main>
 
  <section class="left-sec">
   
    <h1>Welcome <?php echo $name;?>!</h1><br>
  

  
  </section>

  <section class="right-sec">
   <figure>
    <img src="real6.png" width=2500 height=1500>
   </figure>
  </section>
 </main>
</header>



<script src="assets1/js/main.js"></script>
</body>
</html>



