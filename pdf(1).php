<?php

$conn=new mysqli("localhost","root","","realestate");
session_start();
if($conn->connect_error)
die("connection failed".$conn->connect_error);
 else
     echo" ";

$sql = "SELECT * FROM userplan";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{

$Plan_id=$row['Plan_id'];

$Email_id=$row['Email_id'];

$Name=$row['Name'];

$Phone No=$row['Phone No'];

$Plan_Description=$row['Plan_Description'];
$Plan_Duration=$row['Plan_Duration'];
$Plan_Amount = $row['Plan_Amount'];
$Plan_Start_Date = $row['Plan_Start_Date'];
$Plant_End_Date = $row['Plant_End_Date'];


}

}

?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title></title>
	 <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">













	.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2 class="logo">Home Genie</h2>
    			<h3 class="pull-right">Plan Id : <?php echo $Plan_id ?> </h3>
           <h4>E-Mail : homegenie@gmail.com</h4>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					Name : <?php echo $Name ?> <br>-->
    					E-Mail : <?php echo $Email_id ?><br>
    					Phone Number : <?php echo $Phone No ?><br>
    					Address : <?php echo $address ?>-->
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<!--<address>
        			<strong>Shipped To:</strong><br>
    					Name : <?php echo $username ?> <br>
    					E-Mail : <?php echo $email ?><br>
    					Phone Number : <?php echo $phonenumber ?><br>
    					Address : <?php echo $address ?>
    				</address>-->
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					Razor Pay
    				</address>
    			</div>
          
          <div class="col-xs-6 text-right">
            <address>
              <strong>Start Date:</strong>
              <?php echo $Plan_Start_Date ?>
              <br><strong>End Date:</strong>
              <?php echo $Plant_End_Date ?>
            </address>
          </div>
    			
    				</address>
    			</div>
    		
        <div class="row">
          <div class="col-xs-6">
            <address>
              <strong>Order Status:</strong><br>
              Payment Successfull
            </address>
            <address>
              <strong>Plan Duration:</strong><br>
              <?php echo $Plan_Duration ?>
            </address>
          </div>
        </div>
        </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Subscription summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Plan Name </strong></td>
        							<td class="text-right"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							 <tr>
                       <td><?php echo $Plan_Description ?></td>
                      
                       <td class="text-right"><?php echo $Plan_Amount ?></td>
                     </tr>               
    							
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td><strong>Grand Total</strong></td>
    								<td><?php echo $Plan_Amount ?></td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
   </div>
    </div>
</div>
</body>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
</html>