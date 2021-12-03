<?php 
session_start();
//include "dbconfigure.php";

/*if(verifyuser())
{
$emailid = $_SESSION['semail'];
$query = "select * from siteuser where emailid='$emailid'";
$rs = my_select($query);
if($row=mysqli_fetch_array($rs))
{
$username = $row[0];
$city = $row[2];
$address = $row[3];
$contact = $row[5];
}

}
else
{
header("location:index.php");
}*/
?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .checkoutlist{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    margin-top:5%;
}

.checkoutlist .checkoutlist-inner{
    height:300px;
    display:flex;
    flex-direction:coloumn;
    justify-content:center;
    align-items:center;
    background-color:#f2f3f5;
    
    border-radius:5px;
    width:50%;

}

    </style>
    <a href="http://localhost/project2/pdf.php" button class="button button3" >PRINT </a>

<?php

require('config.php');


require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
   $paydate=time();
    

 //  $cid = mysqli_connect($dbserver,$dbuser,$dbpwd) or die("Connection Failed");
 //  mysqli_select_db($cid,$dbname);

    $payorder= htmlspecialchars($_SESSION['razorpay_order_id']);
   // $ordidforclient= htmlspecialchars($_SESSION['order_id']);

  //  $productid= htmlspecialchars($_SESSION['productid']);
 //   $totalamount=$_SESSION['totalamt'];

    $paymentsid= $_POST['razorpay_payment_id'];
	echo "<img src=paymentlogosuccess.png width=1270 height=442 />";
  //  $emid= htmlspecialchars($emailid);
    

/*    $sqlq = "INSERT INTO `payments`(`id`, `razorpay_payment_id`,`razorpay_order_id`, `orderid`,`productid`,`totalamt`, `paydate`, `userid`, `paystatus`, `activestatus`)
    VALUES ('','$paymentsid','$payorder','$ordidforclient','$productid','$totalamount','$paydate','$emid',1,1)";
*/
     //   if (mysqli_query($cid, $sqlq )) {

         //   $html = "<div class=checkoutlist> <div class=.checkoutlist-inner> <div class='alert alert-success'>
     //   <strong>Success!</strong> Your payment  for order no ".$payorder." is succesfull.
      
      //  <p>Your payment was successful</p>
            //    <p>Payment ID: {$_POST['razorpay_payment_id']}</p>
       // ";

     /*   $_SESSION['quantity'] = "";
        $_SESSION['order_id'] = "";
        $_SESSION['productid'] = "";
        $_SESSION['from'] ='';
        $_SESSION['totalamt'] ="";*/
    
      //  } 
//        else {
//            echo "Error: " . $sqlq  . "<br>" . mysqli_error($cid);
//        }
    

       
/*
}
else
{

    $_SESSION['quantity'] = "";
    $_SESSION['order_id'] = "";
    $_SESSION['productid'] = "";
    $_SESSION['from'] ='';
    $_SESSION['totalamt'] ="";
    
   $html = "<div class=checkoutlist> <div class=checkoutlist-inner> <div class='alert alert-danger'>        <strong>".$error."!</strong>      <br>        <p>Try again Later.</p>
        ";
*/
}


/*if($_SESSION['from']=='cart')
        {
        
            $html.="<center><a href='viewcart.php'> Go Back</a></center></div></div></div>";
        }
        else{

            $html.="<center><a href='viewallcategory.php'> Go Back</a></center></div></div></div>";
        }*/


//echo $html;
