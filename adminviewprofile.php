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
    </head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title></title>

 <style>
 
/**
 * Attempt to center the whole thing!
 */



*
{
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

h5
{
  margin:0px;
  font-size:2.6em;
  font-weight:700;
}
table td
{
  font-size:20px;
}

.center
{
  height:100vh;
  width:100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* End Non-Essential  */

.btn1
{
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
position:relative;
margin-left:-0.8px;
}
.btn1:hover
{
  color: white;
  background: orange;
}

body {
  height: 100%;
  font-family: montserrat;
  background-image: url('');
   width: 100%;
 height: 100vh;
 }

.property-card
{
 
 height:26em;
  width:26em;
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:vertical;
  -webkit-box-direction:normal;
  -ms-flex-direction:column;
  flex-direction:column;
  position:relative;
  -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  border-radius:16px;
  overflow:hidden;
  -webkit-box-shadow:  15px 15px 27px #e1e1e3, -15px -15px 27px #ffffff;
  box-shadow:none;
}

.property-description
{
  background-color: #FAFAFC;
  height:33em;
  width:26em;
  position:absolute;
  top:0em;
  -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  padding: 0.5em 1em;
  text-align:center;
}
</style>
 </head>
 
 
  <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="assets/img/home" alt="">
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
                         <a href="adminay.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Overview</span>
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
                                <span class="nav__name">News</span>
                            
                            </a>
                            
                       


                        <a href="index.html" class="nav__link">
                            <i class='bx bx-log-out nav__icon'></i>
                            <span class="nav__name">Logout</span>
                        </a>
                    </div>
                </div>

               
            </nav>
        </div>

        
        
       
    

      
     
        
      

<div class="center">
  <div class="property-card">
    
   
    <div class="property-description">
      <h5> PROFILE </h5>
	  <br>
	  <center> 
	  <table>
	    <tr>
        <td><b>Name: </b></td>
        <td><b><?php echo $adname;?></b></td>
		</tr>
		<tr>
		<td><b>Email: </b></td>
		<td><b><?php echo $admin_email_id;?></b></td>
		</tr>
		<tr>
		<td><b>Mobile_no: </b></td>
		<td><b><?php echo $admin_mobile_no;?></b></td>
		</tr>
		
		</table>
		
    </div>
     </center>
	</div>
    </div> 
 
<center>    

<a href="adminupdateprofile.php?GetId=<?php echo $admin_id ?>">
<button class="btn1">Edit Profile</button>
</a>
 <a href="adminchangepass.php?GetId=<?php echo $admin_id ?>">
<button class="btn1">Change Password</button>
</a>
<br><br>
</center> 
<script>
          $(window).on("load",function(){
              $(".loader-container").fadeOut(1000);
          });
        </script>

 <script src="assets/js/main.js"></script>

</body>
</html>
