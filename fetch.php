<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
</style>
 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Admin Dashboard</title>
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
                            <span class="nav__name"> Add Property</span>
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

                        <a href="home.html" class="nav__link">
                            <i class='bx bx-log-out nav__icon'></i>
                            <span class="nav__name">Logout</span>
                        </a>
                    </div>
                </div>

               
            </nav>
        </div>


 
             <center>
            <div class="form-wrap">
               <h1><u>PROPERTY CHECK</u></h1>  
        <table class="styled-table" cellpadding="15"  method="post">
          <thead>
        <tr>
            <th width="90"><strong><b>USER ID</b></strong></th>
            <th width="124"><strong><b>PROPERTY ID</b></strong></th>
            
             
        </tr>
      </thead>

      <?php
           //creating connection
         $conn= mysqli_connect("localhost","root","","realestate");
    
            //checking connection
            if($conn->connect_error){
                die("connection failed".$conn->connect_error);
            }

             
             $sql= "SELECT * FROM interested";
             $result= mysqli_query($conn, $sql); 
             $time=date("d-m-Y");

                if (mysqli_num_rows($result) > 0)
                    while($row = mysqli_fetch_assoc($result))
                    {
                      $sql1="SELECT property_id,seller_name,city,availability_status,special_prop1 FROM property WHERE property_id=".$row['property_id'];
                      $sql2="SELECT user_id,name,email_id FROM user_reg WHERE user_id='".$row['user_id']."'";
                      $result1=mysqli_query($conn,$sql1);
                      $result2=mysqli_query($conn,$sql2);
                      $row1=mysqli_fetch_assoc($result1);
                      $row2=mysqli_fetch_assoc($result2);



                    ?> 
                    <tbody>
                     <tr >
                       <td ><?php echo $row2['user_id']; ?></td>
                       <td><?php echo $row['property_id']; ?></td>
                       
                     </tr> 
                     </tbody>                                
                    <?php    
                    } 

                echo "</table>";
            $conn->close();
        ?>
</div>
      </center> 
      </table>
     </div>
     </center>
     <script src="assets/js/main.js"></script>

     </body> 
</html>