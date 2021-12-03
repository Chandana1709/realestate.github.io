<?php 

define('RAZOR_KEY_ID', 'rzp_test_34NuyTKcIgGoZj');
define('RAZOR_KEY_SECRET', '0J0eT4PO4vtUF7wVLrnnQ3pI');

session_start();
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	$server = "localhost";
$user = "root";
$password = "";
$db = "realestate";

$con = new mysqli($server,$user,$password,$db);

	if ($_GET['planid']) {
		$id = $_GET['planid'];
		/*$se = "SELECT * from plan";
		$see = mysqli_query($con,$se);
		$seee = mysqli_fetch_assoc($see);*/
	}
	if (isset($_POST['enter'])) {
		 $user_id = $_POST['user_id'];
		 $_SESSION['user_id'] = $user_id;
		 $CUST_ID= $_POST['CUST_ID'];
		 $_SESSION['CUST_ID'] = $CUST_ID;
		 $planname = $_POST['planname'];
		 $_SESSION['planname'] = $planname;
		 $INDUSTRY_TYPE_ID = $_POST['INDUSTRY_TYPE_ID'];
		 $_SESSION['INDUSTRY_TYPE_ID'] = $INDUSTRY_TYPE_ID;
		 $CUST_ID = $_POST['CUST_ID'];
		 $_SESSION['CUST_ID'] = $CUST_ID;
		 $CHANNEL_ID = $_POST['CHANNEL_ID'];
		 $_SESSION['CHANNEL_ID'] = $CHANNEL_ID;
		 $ORDER_ID = $_POST['ORDER_ID'];
		 $_SESSION['ORDER_ID'] = $ORDER_ID;
		 $TXN_AMOUNT = $_POST['TXN_AMOUNT'];
		 $_SESSION['TXN_AMOUNT'] = $TXN_AMOUNT;
			$e = mysqli_query($con,"SELECT user_id FROM user_reg where user_id='$user_id'");
			//$ee = mysqli_query($con,$e);
			$ee = mysqli_num_rows($e);
			if ($ee > 0) {
				header('location:pgRedirect.php');
			}
			else{
				
			}
	}
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Payment information</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<link rel = "icon" href ="">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</head>
<style>
		 table th{
         background-color: #fafbff;
         
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
.butn  {  
font-size: 20px;
      display: inline-block;
      color: #2D8AD5 ;
      padding: 5px 20px;
      margin: 8px 0;
      border: 2px solid #2D8AD5;
      line-height: 15px;
      border-radius: 10px;
      background-color: white;
      cursor: pointer;
      width:  225px;
      height: 35px;
      opacity: 0.9;
      transition: .5s;
  }
.butn:hover
{
      font-size: 22px;
      color: #3276AD; ;
      border: 2px solid #3276AD;;
     background-color: #fafbff;
   
}
</style>
<body>
	<h1><center>Payment information</center></h1>
	<pre>
	</pre>
	<?php $se = "SELECT * from plan where planid='".$_GET['planid']."'";
		$see = mysqli_query($con,$se);
		if ($row = mysqli_fetch_assoc($see)) {
			
		?>
<form name="razorpay_frm_payment" class="razorpay-frm-payment" id="razorpay-frm-payment" method="post">
<input type="hidden" name="merchant_order_id" id="merchant_order_id" value="12345"> 
<input type="hidden" name="language" value="EN"> 
<input type="hidden" name="currency" id="currency" value="INR"> 
<input type="hidden" name="surl" id="surl" value="https://localhost/project2/razorpay/success.php"> 
<input type="hidden" name="furl" id="furl" value="https://localhost/project2/razorpay/failed.php"> 
<section class="showcase">
  <div class="container">
    <div class="pb-2 mt-4 mb-2 border-bottom">
      
    </div>
    <div class="row align-items-center">
       <div class="form-group col-md-6">
        <label for="inputEmail4">Amount</label>
        <input type="text" class="form-control" id="amount" name="amount" placeholder="amount" value="<?php echo $row['planamt'] ?>" readonly="readonly">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Full Name</label>
        <input type="text" name="billing_name" class="form-control" id="billing-name"  Placeholder="Name" required> 
      </div>
  </div>
    <div class="row align-items-center">
       <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" name="billing_email"class="form-control" id="billing-email" Placeholder="Email" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Phone</label>
        <input type="text" name="billing_phone" class="form-control" id="billing-phone" Placeholder="Phone" required>
      </div>
  </div>
    <div class="row align-items-center">  
      <div class="form-group col-md-6">
        <label for="inputEmail4">Address</label>
         <input type="text" name="billing_address" class="form-control" Placeholder="Address">
      </div>
       <div class="form-group col-md-6">
        <label for="inputEmail4">Country</label>
        <input type="text" name="billing_country" class="form-control" Placeholder="Country">
      </div>
    </div>

    <div class="row align-items-center">  
      <div class="form-group col-md-6">
        <label for="inputEmail4">State</label>
         <input type="text" name="billing_state" class="form-control" Placeholder="State"> 
      </div>
       <div class="form-group col-md-6">
        <label for="inputEmail4">Zipcode</label>
        <input type="text" name="billing_zip" class="form-control" Placeholder="Zipcode">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <button type="button" class="btn btn-success mt-4 float-right" id="razor-pay-now"><i class="fa fa-credit-card" aria-hidden="true"></i> Pay</button>
      </div>
    </div>
</div>
</section>
</form>
		<?php  } ?>
		
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
  jQuery(document).on('click', '#razor-pay-now', function (e) {
    var total = (jQuery('form#razorpay-frm-payment').find('input#amount').val() * 100);
    var merchant_order_id = jQuery('form#razorpay-frm-payment').find('input#merchant_order_id').val();
    var merchant_surl_id = jQuery('form#razorpay-frm-payment').find('input#surl').val();
    var merchant_furl_id = jQuery('form#razorpay-frm-payment').find('input#furl').val();
    var card_holder_name_id = jQuery('form#razorpay-frm-payment').find('input#billing-name').val();
    var merchant_total = total;
    var merchant_amount = jQuery('form#razorpay-frm-payment').find('input#amount').val();
    var currency_code_id = jQuery('form#razorpay-frm-payment').find('input#currency').val();
    var key_id = "<?php echo RAZOR_KEY_ID; ?>";
    var store_name = 'Web Haunt';
    var store_description = 'Payment';
    var store_logo = '';
    var email = jQuery('form#razorpay-frm-payment').find('input#billing-email').val();
    var phone = jQuery('form#razorpay-frm-payment').find('input#billing-phone').val();
    
    jQuery('.text-danger').remove();

    if(card_holder_name_id=="") {
      jQuery('input#billing-name').after('<small class="text-danger">Please enter full mame.</small>');
      return false;
    }
    if(email=="") {
      jQuery('input#billing-email').after('<small class="text-danger">Please enter valid email.</small>');
      return false;
    }
    if(phone=="") {
      jQuery('input#billing-phone').after('<small class="text-danger">Please enter valid phone.</small>');
      return false;
    }
    
    var razorpay_options = {
        key: key_id,
        amount: merchant_total,
        name: store_name,
        description: store_description,
        image: store_logo,
        netbanking: true,
        currency: currency_code_id,
        prefill: {
            name: card_holder_name_id,
            email: email,
            contact: phone
        },
        notes: {
            soolegal_order_id: merchant_order_id,
        },
        handler: function (transaction) {
            jQuery.ajax({
                url:'callback.php',
                type: 'post',
                data: {razorpay_payment_id: transaction.razorpay_payment_id, merchant_order_id: merchant_order_id, merchant_surl_id: merchant_surl_id, merchant_furl_id: merchant_furl_id, card_holder_name_id: card_holder_name_id, merchant_total: merchant_total, merchant_amount: merchant_amount, currency_code_id: currency_code_id}, 
                dataType: 'json',
                success: function (res) {
                    if(res.msg){
                        alert(res.msg);
                        return false;
                    } 
                    window.location = res.redirectURL;
                }
            });
        },
        "modal": {
            "ondismiss": function () {
                // code here
            }
        }
    };
    // obj        
    var objrzpv1 = new Razorpay(razorpay_options);
    objrzpv1.open();
        e.preventDefault();
            
});
</script>