 <?php
$conn=new mysqli("localhost","root","","realestate");
	    if($conn->connect_error)
		die("connection failed".$conn->connect_error);
        else
        echo " ";
$admin_id=$_GET['GetId'];
$query="select * from admin_reg where admin_id='".$admin_id."'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
	$admin_id=$row['admin_id'];
}



    if(isset($_POST['submit']))
    {
      $admin_id=$_POST['admin_id'];
	  $query="SELECT * FROM admin_reg where admin_id='$admin_id'";
      $query_run=mysqli_query($conn,$query);

	}

?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">
  
  
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  html,
body {
  height: 100%;
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
	   admin_password = form.admin_password.value;
	   confirmpassword = form.confirmpassword.value;
	   if(admin_password != confirmpassword){
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
                        <a href="userdashboard.php" class="nav__link active">
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

                          
                      
                       <a href="#" class="nav__link">
                            <i class='bx bx-user-plus nav__icon'></i> 
                            <span class="nav__name">Add Admin</span>
                        </a>

                          
                      <a href="#" class="nav__link">
                            <i class='bx bx-book-heart nav__icon'></i> 
                            <span class="nav__name">Favorites</span>
                        </a>

                        <a href="#" class="nav__link">
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

       
        
   
  <div class="title"><h1>Change Password</h1></div>
      <div class="container">
        <div class="left"></div>
        <div class="right">
          <div class="formBox">
        <form method="post" action="adminchangepassword.php" >     
            



        
        
        
            <label for="admin_id"><b>Admin id</b></label>
            <input type="text" id="admin_id" name="admin_id" placeholder="Enter Admin id" value="<?php echo $admin_id ?>"><br>
          
		  		 
		  
            <label for="admin_password"><b>Password</b></label>
            <input type="admin_password"  pattern="(?=.*\d)(?=.*[A-Z]).{6,}" title="Must contain atleast one number and one uppercase letter and have atleast 6 or more characters" id="admin_password" name="admin_password" placeholder="Enter New Password" required><br>			
		
		  
            <label for="Confirm password"><b>Confirm Password</b></label>
            <input type="password" id="confirmpassword" placeholder="Confirm Password" name="confirmpassword" required><br>
          
		  
<input type="submit"  name="submit" value="Submit" class="btn" onclick="return checkpassword(form)";><br>




</form>
 <a href="adminviewprofile.php"><input type="submit" value="Back" class="btn"></a>
 <script>
          $(window).on("load",function(){
              $(".loader-container").fadeOut(1000);
          });
        </script>
<script src="assets/js/main.js"></script>
</body>
	</html>
	