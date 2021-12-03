<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
session_start();
//error_reporting(0);
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b><center>Checksum matched and following are the transaction details:</center></b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {

		echo "<b><center>Transaction status is success</center></b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b><center>Transaction status is failure</center></b>" . "<br/>";
	}
	
	$server = "localhost";
$user = "root";
$password = "";
$db = "realestate";

$con = new mysqli($server,$user,$password,$db);
$orderid = $_SESSION["ORDER_ID"];
$amt = $_SESSION["TXN_AMOUNT"];
$user_id = $_SESSION["user_id"];
$planna = $_SESSION["planname"];
/*echo'
<table border="0">
		<tr>
			<td>Email </td><td>'.$email.'</td>
		</tr>
		<tr>
			<td>Order_id </td><td>'.$_SESSION["ORDER_ID"].'</td>
		</tr>
		<tr>
			<td>Plan name </td><td>'.$_SESSION["planname"].'</td>
		</tr>
		<tr>
			<td>Plan amount</td><td>'.$_SESSION["TXN_AMOUNT"].'</td>
		</tr>
	</table>

';*/
$fill = mysqli_query($con,"SELECT * FROM payment");

$insert = mysqli_query($con,"INSERT into payment(orderid,user_id,plan_name,plan_amount) VALUES ('{$orderid}','{$email}','{$planna}','{$amt}')");
if ($insert) {
	 echo '<script>alert("Payment success")</script>';
}
}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel = "icon" href ="logo.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<title>payment</title>
</head>
<style>
		 table th{
         background-color: #efefef;
         
     }
        th, td {
        padding: 5px;    
       width: 220px;
 }
table.center {
  margin-left: auto; 
  margin-right: auto;
  padding-top: 2%;
}

  

</style>
<body>
	<center><table border="0" style="margin-left: 80px;">
		<tr>
			<td>User_Id </td><td><?php echo $user_id ?></td>
		</tr>
		<tr>
			<td>Order_id </td><td><?php echo $_SESSION["ORDER_ID"]?></td>
		</tr>
		<tr>
			<td>Plan name </td><td><?php echo $_SESSION["planname"]?></td>
		</tr>
		<tr>
			<td>Plan amount</td><td><?php echo $_SESSION["TXN_AMOUNT"]?></td>
		</tr>
	</table></center><br>
	<a href="unset.php" style="padding-left: 570px;">Please login to access your account</a>
</body>
<?php
	session_unset();
?>
</html>