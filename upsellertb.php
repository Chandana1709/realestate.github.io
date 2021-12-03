 <?php
  session_start();
if(isset($_SESSION['user_id']))
 {

  $user_id=$_SESSION['user_id'];
}
$conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)
die("connection failed".$conn->connect_error);
 else
     echo" ";


  $sql = mysqli_query($conn,"select * from property where user_id='$user_id'");

 
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Display</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Modak&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Admin Dashboard</title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Userdashboard</title>

 
 
<style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #008B8B;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.button {
  background-color: #66e3ba; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button4 {border-radius: 19px;}
.btn {
  background-color: #e6b0aa;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
}
.btn1{
  background-color:rgba(50,70,30,1);
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
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
                                
                                 <a href="usersideb1.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">News</span>
                            
                            </a>
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


  
  <div class="main1">
 
<table class="styled-table" border=1 align="center">
  <thead>
  <tr>

 <th>PROPERTY</th>
    <th>PROPERTY ID</th>
      <th>SELLER NAME</th>
      <th>CITY</th>
      
      
     
      <th>AVAILABILITY STATUS</th>
     
      <th>DELETE</th>
      <th>UPDATE</th>


  </tr>
</thead>
<?php

while($r = mysqli_fetch_array($sql))
{
?>

  <tr>
  <td><img src="<?php echo "http://localhost/".$r["images"]; ?>" width="100" height="100"></td>
  <td><?php echo $r['property_id'];?></td>
  <td><?php echo $r['seller_name'];?></td>
  <td><?php echo $r['city'];?></td>
    
   
    
    <td><?php echo $r['availability_status'];?></td>
   
    

    <td><button class="btn">
<a style="text-decoration: none;color: white;" href="del2.php?property_id=<?php echo $r["property_id"];?>" onclick="return checkdelete()"> Delete</a></td></button>
  <td><button class="btn1">
 <a style="text-decoration: none;color: white;" href="upprop1.php?property_id=<?php echo $r["property_id"];?>">Update</a></td></button>
</tr>
</tbody>
<?php
}
?>
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to Delete this record?')
  }

/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</form>

</div>
</body>
</html>