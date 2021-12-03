<?php

   
   /*echo "<br> connection successful";*/
//include './header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Product rating system with php, mysql, jquery and Ajax">
    <meta name="keywords" content="php,mysql,ajax,product ratings, thesoftwareguy">
    <meta name="title" content="Product rating system with php, mysql, jquery and Ajax">
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Home Genie</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="homep.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="bootstrap/js/jquery-1.9.0.min.js"></script>
<style>
.mySlides {display:none;}
.logo a {
  font-family: "Sofia", sans-serif;

}
</style>
</head>
<body >
  
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="#" style="color:pink; font-size: 35px;"><i class='fas fa-palette' style="color:white"></i></a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="home.html" ><i class="fa fa-home"></i>Home</a></li>
        
        
    </div>
  </nav>
 
</div>
<!-- include this file everytime you want to use rating plugin -->
<script src="raty/jquery.raty.js" type="text/javascript"></script>

<div class="row">
  <div class="container mainbody">
 

  <div class="panel panel-primary" style="margin-top: 80px; ">
    <div class="panel-heading" style="background-color: orange;">
      <h3 class="panel-title" style="font-size: 30px;">Details About This Property</h3>
    </div>
    <div class="panel-body">

      <?php
      // fetch product details
      $sql = "SELECT property_id, seller_name,city,type_of_property,no_of_bedroom,no_of_bathroom,other_rooms,balconies,reserved_parking,total_no_of_floor,floor_no,availability_status,seller_contact_no,images,special_prop1 FROM property  WHERE 1 AND property_id= :property_id;
      try {

        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":property_id", intval($_GET["property_id"]));
        $stmt->execute();
        // fetching products details
        $products = $stmt->fetchAll();
      } catch (Exception $ex) {
        echo $ex->getMessage();
      }

           ?>

      <div class="col-sm-12">
        <div class="row">

          <?php
          if (count($products) > 0) {
            ?>
            <div class="col-sm-4">
              <a href="arts.php?property_id=<?php echo $products[0]["property_id"] ?>">
                <?php echo '<img src="http://localhost/,'.base64_encode($products[0]["Images"]).'"alt=Image" width=300px height=300px;>';?>
                 
              </a>

            </div>
            <div class="col-sm-8">
              <div class="padding10 ntp">
                <h3 class="ntm" style="font-size: 18px;"><b>Seller name:</b> <b style="color:red"><?php echo $products[0]["seller_name"] ?></b></h3>
                <h3 class="ntm" style="font-size: 18px;"><b>Property Type:</b> <b style="color: red"> <?php echo $products[0]["type_of_property"] ?>  </b></h3>
                 <h3 class="ntm" style="font-size: 18px;"><b>City:</b> <b style="color: red"> <?php echo $products[0]["city"] ?></b></h3>

                


                <div><b>Speciality of Property:</b>
                <h3 class="ntm" style="font-size: 18px; font-family: serif; color: purple"><?php echo $products[0]["special_prop1"] ?></h3>
              </div></br>
                
                <div class="padding10 clearfix"></div>
                <a class="btn btn-info" href="userdashboard.php"><span class="glyphicon glyphicon-chevron-left"></span> Goback</a>
              </div>
            </div>
         

        </div>

      </div>

    </div>
  </div>
</div>



</script>
</body></html>