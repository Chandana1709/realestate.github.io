<?php
session_start();
$conn=new mysqli("localhost","root","","realestate");
      if($conn->connect_error)
    die("connection failed".$conn->connect_error);
        else
        echo " ";
$user_id=$_SESSION['user_id'];
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


  }
  
}
    
?>

 


<!DOCTYPE html>
<html lang="en-US">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Userdashboard</title>
  <style>

  

html,
body {
  height: 100%;
}







body {
  background-image:url('');
  background-repeat: no-repeat;
  font-family: monsterrat;
  -webkit-font-smoothing: antialiased;

}



form {
  width: 20%;
  margin: 25px auto;
  background: #efefef;
  padding: 30px 50px 30px 50px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);

}


label {
  display: block;
  position: relative;
  margin: 20px 0px;
}

.label-txt {
  position: absolute;
  top: -1.1em;
  padding: 3px;
  font-family: sans-serif;
  font-size: .6em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}


.input {
  width: 80%;
  padding: 5px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 1px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 1px;
  top: 0px;
  left: 40%;
  transform: translateX(-50%);
  background: #FFC922;
  transition: ease .6s;
} 

.input:focus + .line-box .line {
  width: 80%;
}

.label-active {
  top: -3em;
}

button {
  display: inline-block;
  padding: 12px 24px;
  background: rgb(220,220,220);
  font-weight: bold;
  color: rgb(120,120,120);
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
} 

button:hover {
  color: white;
  background: orange;
  } 
/* 
button:disabled {
  cursor: not-allowed;
  pointer-events: all !important;
} */
</style>
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
        
   <div>
      
        <form method="post" action="userupdatepro.php" >
          <h4 class="text-warning text-center pt-5"> Edit Profile</h4>
         <label>   
		   <label>
            
            <input type="text" class="input" name="name"  placeholder="Enter your Fullname" value="<?php echo $name ?>"/>
            <div class="line-box">
            <div class="line"></div>
          </div>
      </label>
          
           
            <input type="text" class="input" name="user_id"  placeholder="Enter User-id" value="<?php echo $user_id ?>"readonly/>
             <div class="line-box">
            <div class="line"></div>
          </div>
		  </label>
		  
		   
            <label>
            <input type="text" class="input" name="email_id"  placeholder="Enter your Email" value="<?php echo $email_id ?>"readonly/> 
             <div class="line-box">
            <div class="line"></div>         
			</div>
    </label>			
			<label>
            
            <input type="text" class="input" name="mobile_no" placeholder="Enter Mobile No" value="<?php echo  $mobile_no?>"/>
            <div class="line-box">
            <div class="line"></div>     
          </div>
		  </label>
        <label>
            
           
           <label>
            <button  type="submit" name="submit" value="Update">Update</button>
			
          
		 </form>
      </div>
	  

<script src="assets/js/main.js"></script>
	  </body>
	  </html>
