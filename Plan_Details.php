<!DOCTYPE html>
<html>
<head>
  <title> Admin Registerform</title>
  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Admin Dashboard</title>
  <style>
     .container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.RegisterButton{
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.RegisterButton:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
  </style>
</head>
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

                          
                      
                       <a href="newadreg.html" class="nav__link">
                            <i class='bx bx-user-plus nav__icon'></i> 
                            <span class="nav__name">Add Admin</span>
                        </a>

                          
                      <a href="#" class="nav__link">
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

        <!--===== MAIN JS =====-->
        
   

    <h1> Plan Details  </h1>
       <p>Please fill in this form to create an account.</p>
        <form action="" method="POST" style="text_align:centre;">
      
        <label><b>Plan Id </b></label>
        <input type ="text" name="a" id="a"  placeholder = "Plan Id" required>
      
         
        <label><b>Plan Description </b></label>
        <input type ="text" name="b" id="b"  placeholder = "Plan Description" required>
      
       
       <label><b>Plan Duration </b></label>
       <input type ="text" name="c" id="c"   placeholder = "Duration" required>
      
      <label><b>Plan Amount </b></label>
      <input type ="text" name="d" id="d"   placeholder = "Amount" required>
      </div>

       
          <label></label>
          <hr>

    
    <button type="submit" value="Register" class="RegisterButton" name="submit"  onclick="return checkpassword(form)">Register</button>
  </div>


</form>

 <?php include "dbcon.php" ?>
      <?php 

if (isset($_POST['submit']))
{

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
;



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
$query = "insert into plan  values('$a','$b','$c','$d')";


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
         </body>
         </html>
          
              
           

         
        </div>


<script src="assets/js/main.js"></script>

</body>
</html>