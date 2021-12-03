 <?php
  session_start();
if(isset($_SESSION['admin_id']))
 {

  $admin_id=$_SESSION['admin_id'];
}
$conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)
die("connection failed".$conn->connect_error);
 else
     echo" ";


  $sql = mysqli_query($conn,"select * from property where admin_id='$admin_id'");

 
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
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Admin Dashboard</title>

 
 
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

                          
                      <a href="fetch.php" class="nav__link">
                            <i class='bx bx-book-heart nav__icon'></i> 
                            <span class="nav__name">Favorites</span>
                        </a>

                        <a href="viewfeedback.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Feedback View</span>
                        </a>
                         <a href="blog.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Article </span>
                        </a>


                        <a href="index.html" class="nav__link">
                            <i class='bx bx-log-out nav__icon'></i>
                            <span class="nav__name">Logout</span>
                        </a>
                    </div>
                </div>

               
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
<?phps

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
<a style="text-decoration: none;color: white;" href="del1.php?property_id=<?php echo $r["property_id"];?>" onclick="return checkdelete()"> Delete</a></td></button>
  <td><button class="btn1">
 <a style="text-decoration: none;color: white;" href="up1.php?property_id=<?php echo $r["property_id"];?>">Update</a></td></button>
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