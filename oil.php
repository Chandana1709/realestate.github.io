<?php

require_once './configar.php';
//include './header.php';
?>
<?php
$conn=new mysqli("localhost","root","","artplanet");
if($conn->connect_error)
die("connection failed".$conn->connect_error);
 else
     echo" ";
session_start();
$Username = $_SESSION['Username'];
$sql = "SELECT * FROM users WHERE uname='$Username'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{

$user_id=$row['user_id'];
$Name=$row['name'];
$Email=$row['email'];



}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Oilpainting</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
   <link rel="stylesheet" href="homep.css"> 
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
<style>

.logo a {
  font-family: "Sofia", sans-serif;

}
</style>
</head>
<body >

  
 <nav class="navbar navbar-expand-md badge-dark navbar-red"  >
    <div class="logo"><a href="#" style="color:pink; font-size: 35px;"><i class='fas fa-palette' style="color:white"></i>Art Planet</a></div>
    <a class="navbar-brand" href="#" style="color: white; font-size: 37px; font-family: serif; margin-left: 400px;">Oil Painting</a>
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="home.php" style="color: white;font-size: 20px; margin-right: 10px;font-family: serif;"><i class="fa fa-home"></i> HOME</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart" style="color: white" ></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
        
      
      </ul>
    </div>
  </nav>
 
  
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3" >
      <?php
      include 'configar.php';
      $sql = "SELECT Artid, Artname,Image,Size, Price FROM artworks WHERE  Sub_Category = 5 ";
      try {
        $stmt = $DB->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();
      } catch (Exception $ex) {
        echo $ex->getMessage();
      }

      // fetching ratings for specific product
      $ratings_sql = "SELECT count(*) as count, AVG(ratings_score) as score FROM `ratings` WHERE 1 AND Artid = :pid ";
      $stmt2 = $DB->prepare($ratings_sql);

      for ($i = 0; $i < count($products); $i++) {

        try {
          $stmt2->bindValue(":pid", $products[$i]["Artid"]);
          $stmt2->execute();
          $product_rating = $stmt2->fetchAll();
        } catch (Exception $ex) {
          // you can turn it off in production mode.
          echo $ex->getMessage();
        }
        ?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
           <a href="arts.php?pid=<?php echo $products[$i]["Artid"] ?>">
            <h6 class="text-info"><?php echo '<img src="data:Image;base64,'.base64_encode($products[$i]["Image"]).'"alt=Image" width=240px height=250px;>';?></h6></a>
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info" style="font-size: 20px;"><?= $products[$i]['Artname'] ?></h4>

              <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($products[$i]['Price']) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  
                  
                  <div class="row padding5 nlp nrp">
              <div class="col-lg-12" style="margin-left:7px;">
                <?php
                if ($product_rating[0]["count"] > 0) {
                  echo "Average rating <strong>" . round($product_rating[0]["score"], 2) . "</strong> based on <strong>" . $product_rating[0]["count"] . "</strong> users";
                } else {
                  echo 'No ratings for this product';
                }
                ?>
              </div>
              <div>
                <h1 style="font-size: 15px; color: red; margin-left: 17px;">Click On The Image For more Information</h1></div>
            </div>
                </div>
               
               <input type="hidden" class="pid" value="<?= $products[$i]["Artid"] ?>">
               <input type="hidden" class="psize" value="<?= $products[$i]["Size"] ?>">
                <input type="hidden" class="pname" value="<?= $products[$i]["Artname"] ?>">
                <input type="hidden" class="pprice" value="<?= $products[$i]["Price"] ?>">
                <input type="hidden" class="pimage" value="<?$row['Image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
              
                
                <button class="btn btn-info btn-block addItemBtn" ><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div></div> </div>
          <?php } ?>  
        
     
      
    </div>
  </div>
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
       var psize = $form.find(".psize").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          psize:psize,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>