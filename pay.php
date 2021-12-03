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



if(isset($_POST['productid'])){

//product info
$id = $_POST['productid'];
$query = "select * from product where id=$id";
$rs = my_select($query);
if($row = mysqli_fetch_array($rs))
{
$productname = $row[1];
$price = $row[4];

}
}

}
else
{
header("location:index.php");
}*/
echo "<h1 align=center> <marquee> </marquee></h1>";
echo "<p align=center><img src=paymentlogo.jpg height=600 width=600></img></p>";
?>

<?php

require('config.php');
require('razorpay-php/Razorpay.php');

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
/*

if(isset($_GET['userid']))
{
    $query = "select * from shopping where emailaddress='sridharjoshi1603@gmail.com'";
    $rs = my_select($query);
    $products_id=array();
    $products_name=array();
    $products_price=array();
    $totalamt=0;
    $i=0;
    while($row = mysqli_fetch_array($rs))
    {
        $products_id[$i]=$row['0'];
        $products_name[$i]=$row[4];
        $products_price[].=$row[5].",";
        $totalamt+=$row[5];

        $i++;
    }

    $uningnumber=time();
    $_SESSION['order_id'] = $uningnumber;
    $_SESSION['productid'] =implode(',',$products_id);
    $_SESSION['from'] ='cart';
    $_SESSION['totalamt'] =$totalamt;

}
else
{
    $productid=$_POST['productid'];
    $totalamt=$_POST['total'];
    $quantity=$_POST['quantity'];
    $username=$_POST['username'];
    $uningnumber=$_POST['orderid']+$productid;
    $contact=$_POST['contact'];
    $emailid=$_POST['emailid'];
    $address=$_POST['address'];

    $_SESSION['quantity'] = $quantity;
    $_SESSION['order_id'] = $uningnumber;
    $_SESSION['productid'] = $productid;
    $_SESSION['from'] ='product';
    $_SESSION['totalamt'] =$totalamt;

}
*/
$uningnumber=100;
$totalamt=$_GET["amt"];
$orderData = [
    'receipt'         => 
$uningnumber,
    'amount'          => $totalamt *100, // rupees 
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];


$_SESSION['razorpay_order_id'] = $razorpayOrderId;



$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';


if(!isset($_GET['userid']))
{
    if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
    {
        $checkout = $_GET['checkout'];
    }
}
else
{
    $checkout ="manual";
}
$username="";
$emailid='';
$contact="";
$address="blore";
$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "HOME GENIE",
    "description"       => "Buy here",
    "image"             => "paybox.jpeg",
    "prefill"           => [
    "name"              => $username,
    "email"             => $emailid,
    "contact"           => $contact,
    ],
    "notes"             => [
    "address"           => $address,
    "merchant_order_id" => $uningnumber,
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php"); 
