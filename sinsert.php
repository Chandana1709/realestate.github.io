<html>
<body>
<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_POST['submit'])){    
            
  $user_id=$_SESSION['user_id'];     
  $target="project2/".basename($_FILES['images']['name']);
  $seller_name=$_POST["seller_name"];
  $city=$_POST["city"];
  $type_of_property=$_POST["type_of_property"];
  $no_of_bedroom=$_POST["no_of_bedroom"];
  $no_of_bathroom=$_POST["no_of_bathroom"];
  $other_rooms=$_POST["other_rooms"];
  $balconies=$_POST["balconies"];
  $parking=$_POST["parking"];
  $total_no_of_floor=$_POST["total_no_of_floor"];
  $floor_no=$_POST["floor_no"];
  $availability_status=$_POST["availability_status"];
  $age_of_property=$_POST["age_of_property"];
   $MobileNo=$_POST["MobileNo"];
  $SIZE_OF_PROPERTY=$_POST["SIZE_OF_PROPERTY"];
  $COST_OF_THE_PROPERTY=$_POST["COST_OF_THE_PROPERTY"];
  $images = "project 2/".$_FILES['images']['name'];
  
  $images = "project 2/".$_FILES['images']['name'];
   
 $special_prop1=$_POST["special_prop1"];
 }

 $conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)
  die("connection failed".$conn->connect_error);
 else
     echo" ";

  
  $sql= "INSERT INTO property(user_id,seller_name,city,type_of_property,no_of_bedroom,no_of_bathroom,other_rooms,balconies,parking,total_no_of_floor,floor_no,availability_status,age_of_property,MobileNo,SIZE_OF_PROPERTY,COST_OF_THE_PROPERTY,images,special_prop1) values ('" .  $user_id. "','" . $seller_name . "','" . $city . "','" . $type_of_property . "','" . $no_of_bedroom . "','" .$no_of_bathroom . "','" .$other_rooms . "','" .$balconies . "','" .$parking . "','" .$total_no_of_floor . "','" .$floor_no . "','" .$availability_status . "','" .$age_of_property . "','" .$MobileNo . "','" .$SIZE_OF_PROPERTY . "','" .$COST_OF_THE_PROPERTY . "','" .$images. "','" .$special_prop1. "')";
  if (mysqli_query($conn,$sql)){
           echo  "<script>alert('Report uploaded successfully!')</script>";    
       echo "<script>location.replace('sellerprop.php')</script>";
                  
  }
      

    





  
  ?>
  </body>
  </html>


