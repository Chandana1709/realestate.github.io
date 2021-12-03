<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      margin: 0;
      padding: 0; 
      background-color: #fefbd8;
      background-size: cover;
      background-position: center;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 400px;
      background-color: #0000;
      position: fixed;
      height: 200%;
      overflow: auto;
    }

    
    li a {
      display: block;
      color: #fff;
      padding: 8px 16px;
      text-decoration: none;
      margin-top: 1a0%;
      font-size: 25px; 
    }

    li a:hover:not(.active) {
      background-color: #0000;
      color: white;
    }
     i{
            margin-right: 15px;
       }
       
         ul h2{
           color: #fff;
           font-size: 40px;
        }
        h1{
           background-color: grey;
           width: 40%;
           color: #000;
           font-size: 50px;
           margin-top: 10px;
        }
        table, th, td {border: 1px solid navy}; 
        *{
            background-color: lavender;
            width: 200px;
        }

        .form-wrap{
            width:80.5%;
            padding:30px 30px;
            box-sizing:content-box;
           /position:fixed;/ 
           left:3%;
           top:05%
           transform:translate(-50%,-50%);
           overflow: auto;
        }
        a
        {
          font-size: 23px;
          color: #fff;
          padding-left: 20px;
        }
    
</style>
</head>
<body>
  <a class="fa fa-arrow-left" href="userhome.html" style="font-size:50px; color: black; margin-left: 00%; margin-top :-04px;text-decoration: none;" ></a>
 
 
             <center>
            <div class="form-wrap">
               <h1>PROPERTY VIEW</h1>  
        <table class="table" cellpadding="8" action="interested.php" method="post">
        <tr>
            <td width="150"><strong>Property Name</strong></td>
            <td width="160"><strong>User_Name</strong></td>
            
             
        </tr>

      <?php
      session_start();
           //creating connection
         $conn= mysqli_connect("localhost","root","","re");
    
            //checking connection
            if($conn->connect_error){
                die("connection failed".$conn->connect_error);
            }

             $uid=$_SESSION['uid'];
             $sql= "SELECT * FROM interested WHERE uid='$uid' ";
             $result= mysqli_query($conn, $sql); 

                if (mysqli_num_rows($result) > 0)
                    while($row = mysqli_fetch_assoc($result))
                    {
                      $sql1="SELECT pname,pstatus,psize,cost,address,description,owner,ownercontactno FROM property WHERE pid=".$row['pid'];
                      $sql2="SELECT user_name,mobile_number,emailid FROM registerform WHERE uid='".$row['uid']."'";
                      $result1=mysqli_query($conn,$sql1);
                      $result2=mysqli_query($conn,$sql2);
                      $row1=mysqli_fetch_assoc($result1);
                      $row2=mysqli_fetch_assoc($result2);



                    ?> 
                     <tr>
                       <td><?php echo $row1['pname']; ?></td>
                       <td><?php echo $row2['user_name']; ?></td>
                     </tr>                                
                    <?php    
                    } 

                echo "</table>";
            $conn->close();
        ?>
        
</div>

      </center>  
         
</html>