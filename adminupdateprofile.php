<?php
$conn=new mysqli("localhost","root","","realestate");
	    if($conn->connect_error)
		die("connection failed".$conn->connect_error);
        else
        echo " ";
$admin_id=$_GET['GetId'];
 $query="SELECT * FROM admin_reg where admin_id='$admin_id'";

$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
  $adname=$row['adname'];
	$admin_id=$row['admin_id'];
	$admin_email_id=$row['admin_email_id'];
	$admin_mobile_no=$row['admin_mobile_no'];

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

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">
  <style>

   ttempt to center the whole thing!
 */

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
  width: 80%;
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
   
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="assets/img/home.png" alt="">
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
                        
                        <a href="propadd.php" class="nav__link">
                            <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name"> Add Property </span>
                        </a>
                        
                            <a href="up2.php" class="nav__link">
                            <i class='bx bx-pencil nav__icon' ></i>
                            <span class="nav__name">Update/Delete</span></a>

                          
                      
                       <a href="addadmin.php" class="nav__link">
                            <i class='bx bx-user-plus nav__icon'></i> 
                            <span class="nav__name">Add Admin</span>
                        </a>

                          
                      <a href="interested.php" class="nav__link">
                            <i class='bx bx-book-heart nav__icon'></i> 
                            <span class="nav__name">Favorites</span>
                        </a>

                        <a href="viewfeedback.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Feedback View</span>
                        </a>

                        <a href="home.html" class="nav__link">
                            <i class='bx bx-log-out nav__icon'></i>
                            <span class="nav__name">Logout</span>
                        </a>
                    </div>
                </div>

               
            </nav>
        </div>

       
        
  
    
  
   <div>
      
        <form method="post" action="adminupdatepro.php" >
          <h4 class="text-warning text-center pt-5"> Edit Profile</h4>
         <label>   
		   <label>
            
            <input type="text" class="input" name="adname"  placeholder="Enter your Fullname" value="<?php echo $adname ?>"/>
            <div class="line-box">
            <div class="line"></div>
          </div>
      </label>
          
           
            <input type="text" class="input" name="admin_id"  placeholder="Enter Admin-id" value="<?php echo $admin_id ?>"/>
             <div class="line-box">
            <div class="line"></div>
          </div>
		  </label>
		  
		   
            <label>
            <input type="text" class="input" name="admin_email_id"  placeholder="Enter your Email" value="<?php echo $admin_email_id ?>"/> 
             <div class="line-box">
            <div class="line"></div>         
			</div>
    </label>			
			<label>
            
            <input type="text" class="input" name="admin_mobile_no" placeholder="Enter Mobile No" value="<?php echo  $admin_mobile_no?>"/>
            <div class="line-box">
            <div class="line"></div>     
          </div>
		  </label>
        <label>
            
           
           <label>
            <button  type="submit" name="submit" value="Update">Update</button>
			
          
		 </form>
      </div>
	  <center>
	  <a href="adminviewprofile.php">
      <button type="submit" name="submit" value="Back">Back</button>
      </a>
      </center>
<script>
          $(window).on("load",function(){
              $(".loader-container").fadeOut(1000);
          });
        </script>
<script src="assets/js/main.js"></script>
	  </body>
	  </html>
