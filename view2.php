<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-size: cover;
      background-position: center;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #404040;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    
    li a {
      display: block;
      color: #fff;
      padding: 8px 16px;
      text-decoration: none;
      margin-top: 10%;
      font-size: 18px; 
    }

    li a:hover:not(.active) {
      background-color: #595959;
      color: white;
    }
     i{
            margin-right: 15px;
       }
       
         ul h2{
           color: #fff;
           font-size: 30px;
        }
        h1{
           background-color: #d9d9d9;
           width: 50%;
           color: #000;
           font-size: 40px;
        }
        table, th, td {border: 1px solid black}; 
        *{
            background-color: #e0e0d2;
        }

        .form-wrap{
            width:76.5%;
            padding:20px 20px;
            box-sizing:border-box;
           /*position:fixed;*/ 
           left:3%;
           top:10%
           transform:translate(-50%,-50%);
           overflow: auto;
        }
    
</style>
</head>
<body>

  <ul>
    <center><h2>ADMIN</h2></center><br><br>
    <li><a href="adminindex.html" href=""><i class="fa fa-home"></i>Home</a></li>
    <li><a class="active"><i class="fa fa-user"></i>View Users</a></li>
    <li><a href="package.html"><i class="fa fa-plus"></i>Insert Packages</a></li>
    <li><a href="connection1.php"><i class="fa fa-edit"></i>Update Packages</a></li>
    <li><a href="connection2.php"><i class="fa fa-trash"></i>Delete Packages</a></li>
    <li><a href="view.php"><i class="fa fa-desktop"></i>View Booking</a></li>
    <li><a href="admin.html"><i class="fa fa-arrow-circle-o-right"></i>Signout</a></li>
  </ul>
  </div>
 
             <center>
            <div class="form-wrap">
               <h1>USER DETAILS</h1>  
        <table class="table" cellpadding="10" action="view2.php" method="post">
        <tr
            <td width="90"><strong> Property Id</strong>></td>
            <td width="90"><strong>Seller Name</strong></td>
            <td width="90"><strong>City</strong></td>
            <td width="120"><strong>Type Of Property</strong></td>
            <td width="90"><strong>No Of Bedrooms</strong></td>
            <td width="90"><strong>No Of Bathrooms</strong></td>
            <td width="90"><strong>Other Rooms</strong></td>   
            <td width="90"><strong>Balconies</strong></td>
            <td width="90"><strong>Reserved Parking</strong></td>
            <td width="90"><strong>Total No Of Floor</strong></td>
            <td width="90"><strong>Floor No</strong></td>
            <td width="90"><strong>Availability Status</strong></td>
            <td width="90"><strong>Age Of Property</strong></td>
            <td width="90"><strong>Seller Contact No</strong></td>
            <td width="90"><strong>Images</strong></td>
            <td width="90"><strong>Special Property</strong></td>

        </tr>

      <?php
           //creating connection
         $conn= mysqli_connect("localhost","root","","realestate");
    
            //checking connection
            if($conn->connect_error){
                die("connection failed".$conn->connect_error);
            }

             $sql= "SELECT * FROM property";
             $result= mysqli_query($conn, $sql); 

                if (mysqli_num_rows($result) > 0)
                    while($row = mysqli_fetch_assoc($result))
                    {
                    ?> 
                     <tr>
                       <td><?php echo $row['property_id']; ?></td>
                       <td><?php echo $row['seller_name']; ?></td>
                       <td><?php echo $row['city']; ?></td>
                       <td><?php echo $row['type_of_property']; ?></td> 
                       <td><?php echo $row['no_of_bedroom']; ?></td>
                       <td><?php echo $row['no_of_bathroom']; ?></td>
                       <td><?php echo $row['other_rooms']; ?></td>
                       <td><?php echo $row['balconies']; ?></td>
                       <td><?php echo $row['reserved_parking']; ?></td>
                       <td><?php echo $row['total_no_of_floor']; ?></td>
                       <td><?php echo $row['floor_no']; ?></td>
                       <td><?php echo $row['availability_status']; ?></td> 
                       <td><?php echo $row['age_of_property']; ?></td>
                       <td><?php echo $row['seller_contact_no']; ?></td>
                       <td><?php echo $row['images']; ?></td>
                       <td><?php echo $row['special_prop1']; ?></td>
                     </tr>                                 
                    <?php    
                    } 

                echo "</table>";
            $conn->close();
        ?>
</div>
      </center>     
</html>