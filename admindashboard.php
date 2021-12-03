<?php
$conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)
  die("connection failed".$conn->connect_error);
 else
     echo" ";
session_start();
$admin_id = $_SESSION['admin_id'];
$sql = "SELECT * FROM admin_reg WHERE admin_id='$admin_id'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
$adname=$row['adname'];
$admin_id=$row['admin_id'];
$admin_email_id=$row['admin_email_id'];
$admin_mobile_no=$row['admin_mobile_no'];
$admin_password=$row['admin_password'];

  }
  
}
    
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Admin Dashboard</title>

 
 

 
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
                         <a href="adminay.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Overview</span>
                        </a>


                        <a href="adminviewprofile.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Users</span>
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

        <!--===== MAIN JS =====-->
        
   
  
 
   
  
 
<br><br>



 <main>
 
  <section class="left-sec">
   
    <h1 height="400" >Welcome <?php echo $adname;?>!</h1>
  <b><h1>Where Dreams Come Home</h1></b>


  
  </section>

  <section class="right-sec">
   <figure>
    <img src="rehomeuser.jpg" width=800 height=500>
   </figure>
  </section>
 </main>
</header>


<script src="assets/js/main.js"></script>

</body>
</html>



