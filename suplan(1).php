

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="">
  <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans",sans-serif;
  text-decoration: none;
  list-style: none;
}

body{
  background-color: #30336b;
  min-height: 100vh;
  display: flex;
  align-items: center;
}

.pricing-table{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  width: min(1600px, 100%);
  margin: auto;
}

.pricing-card{
  flex: 1;
  max-width: 360px;
  background-color: #fff;
  margin: 20px 10px;
  text-align: center;
  cursor: pointer;
  overflow: hidden;
  color: #2d2d2d;
  transition: .3s linear;
}

.pricing-card-header{
  background-color: #0fbcf9;
  display: inline-block;
  color: #fff;
  padding: 12px 30px;
  border-radius: 0 0 20px 20px;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  transition: .4s linear;
}

.pricing-card:hover .pricing-card-header{
  box-shadow: 0 0 0 26em #0fbcf9;
}

.price{
  font-size: 70px;
  color: #0fbcf9;
  margin: 40px 0;
  transition: .2s linear;
}

.price sup, .price span{
  font-size: 18px;
  font-weight: 500;
}
.li strong{
  color:gray;
}

.pricing-card:hover ,.pricing-card:hover .price{
  color: #fff;
}

.pricing-card li{
  font-size: 16px;
  padding: 10px 0;
  text-transform: uppercase;
}

.order-btn{
  display: inline-block;
  margin-bottom: 40px;
  margin-top: 80px;
  border: 2px solid #0fbcf9;
  color: #0fbcf9;
  padding: 18px 40px;
  border-radius: 8px;
  text-transform: uppercase;
  font-weight: 500;
  transition: .3s linear;
}

.order-btn:hover{
  background-color: #0fbcf9;
  color: #fff;
}

@media screen and (max-width:1100px){
  .pricing-card{
    flex: 50%;
  }
}
  </style>
</head>
 <div class="pricing-table">


  <?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

$connection= new mysqli($servername, $username, $password, $dbname);

$query = " SELECT * FROM plan  ";
$result = mysqli_query($connection, $query);
$num = mysqli_num_rows($result);
if($num > 0)
{

while($row = mysqli_fetch_array($result))
{
$a=$row["Plan_id"];
$b=$row["Plan_Description"];
$c=$row["Plan_Duration"];
$d=$row["Plan_Amount"];
$e=$row["plancontent"];


?>



    




 `
    
    <div class="pricing-card">
      <h3 class="pricing-card-header"><?php echo $row['Plan_Description']?></h3>
      <div class="price" name="planamt"><sup></sup><?php echo $row['Plan_Amount']?><span>/<?php echo $row['Plan_Duration']?></span></div>
      <ul>
        <li><strong><?php echo $row['plancontent']?></strong></li>
       
      </ul>

       
    
    <a href="ViewPlan_Details1new.php?a=<?php echo $row["Plan_id"]."&b=".$row["Plan_Description"]."&c=".$row["Plan_Duration"]."&d=".$row["Plan_Amount"];  ?>"  class="order-btn">Buy this..</a>
      
    </div>
    <?php
          }
        }
          ?>

    
  </div>
</body>
</html>