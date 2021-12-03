 <?php
$conn=new mysqli("localhost","root","","realestate");
	    if($conn->connect_error)
		die("connection failed".$conn->connect_error);
        else
        echo " ";
$user_id=$_POST['user_id'];
$query="select * from user_reg where user_id='".$user_id."'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
	$user_id=$row['user_id'];
}



    if(isset($_POST['submit']))
    {
      $user_id=$_POST['user_id'];
	  $query="SELECT * FROM user_reg where user_id='$user_id'";
      $query_run=mysqli_query($conn,$query);

	}

?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Userdashboard</title>
  <title></title>
  
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  .loader-container{
  width:100%;
  height:100vh;
  background-color:black;
  position:fixed;
  display:flex;
  align-items:center;
  justify-content:center;
  z-index:1;
}
.loader{
  width:50px;
  height:50px;
  border:5px solid;
  color:#3498db;
  border-radius:50%;
  border-top-color:transparent;
  animation:loader 1.2s linear;

}
@keyframes loader{
  25%{
    color:#2ecc71;
  }
  50%{
    color:#2ecc71;

  }
  to{
    transform:rotate(360deg);
  }
}
body
{
  margin:0;
  padding:0;
  background:url(resetpng.png);
 /* background-image:url;*/
  background-size:cover;
  font-family: monsterrat;
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

html,
body {
  height: 100%;
}

.loader {
  position: absolute;
  top: calc(50% - #{$size / 2});
  left: calc(50% - #{$size / 2});
}
body {
  background-image:url('myimage..svg');
  background-repeat: no-repeat;
  font-family: montserrat;
  -webkit-font-smoothing: antialiased;

}


/*#loding{
  width:100%;
  height:100vh;
  background:#fff
  url('https://loading.io/spinners/progress-pie/lg.percent-circular-preloader-gif.gif')
  no-repeat center;
  z-index:99999;
}*/
.title
{
  text-align:center;
  padding:50px 0 20px;

}
.title h1
{
  margin:0;
  padding:0;
  color:black;
  text-transform:uppercase;
  font-size:35px;
}
.container
{
  width:50%;
  height:400px;
  background:#fff;
  margin:0 auto;
  border:2px solid #fff;
  box-shadow:0 15px 40px rgba(0,0,0,.5);
}
.container .right
{
  float:right;
  height:400px;
    width:50%;
    height:400px;
    box-sizing:border-box;
}
.container .left
{
  float:left;
  width:50%;
  height:400px;
  background:url(reset.jpeg);
  box-sizing:border-box;
 background-size:cover;
}
.formBox
{
  width:100%;
  padding:40px 80px;
  box-sizing:border-box;
  height:400px;
  background:#fff;
}
.formBox p
{
  margin:0;
  padding:0;
  font-weight:bold;
  color:#a6af13;
}
.formBox input
{
  margin-bottom:20px;
}
.formBox input[type="text"],
.formBox input[type="password"]
{
  border:none;
  border-bottom:2px solid #6af13;
  outline:none;
  height:40px;
}
.formBox input[type="text"]:focus,
.formBox input[type="password"]:focus
{
  
  border-bottom:2px solid #262626;
  
}

.formBox input[type="submit"]
{
  border:none;
  outline:none;
  height:40px;
  width:60%;
  color:#ffff;
  background:#262626;
  cursor:pointer;
}
.formBox input[type="submit"]:hover
{
  color: white;
  background: orange;
}
.formBox 
{
  color:#262626;
}
</style>

  <script>
       function checkpassword(form){
	   password = form.password.value;
	   confirmpassword = form.confirmpassword.value;
	   if(password != confirmpassword){
	   alert("Passwords did not match!\nPlease enter same password in both the fields.")
	   return false;
	   }
	   else{
	   return true;
	   }
	}
</script>

  </head>
   
  <body> 
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
                                        <a href="changepass.php" class="nav__dropdown-item">Change Password</a>
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
                                
                                
                          <a href="usersideb1.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">News</span>
                            
                            </a>
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

        <!--========== CONTENTS ==========-->
       

        <!--========== MAIN JS ==========-->
       
    
  <div class="title"><h1>Change Password</h1></div>
      <div class="container">
        <div class="left"></div>
        <div class="right">
          <div class="formBox">
        <form method="post" action="changepassword.php" >     
            



        
        
        
            <label for="user_id"><b>User id</b></label><br>
            <input type="text" id="user_id" name="user_id" placeholder="Enter User id" value="<?php echo $user_id ?>">
          
		  		 
		  
            <label for="password"><b>Password</b></label>
            <input type="password"  pattern="(?=.*\d)(?=.*[A-Z]).{6,}" title="Must contain atleast one number and one uppercase letter and have atleast 6 or more characters" id="password" name="password" placeholder="Enter New Password" required><br>			
		
		  
            <label for="Confirm password"><b>Confirm Password</b></label>
            <input type="password" id="confirmpassword" placeholder="Confirm Password" name="confirmpassword" required><br>
          
		  
<input type="submit"  name="submit" value="Submit" class="btn" onclick="return checkpassword(form)";><br>




</form>
 <a href="login.php"><input type="submit" value="Back" class="btn"></a>
 
 <script src="assets/js/main.js"></script>
</body>
	</html>
	