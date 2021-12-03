<head>
<?php


include "header.php"; 

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


?>

  <link rel = stylesheet href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel = stylesheet href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">


<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            
            'pdfHtml5'
        ]
    } );
} );
</script>

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
    border:2px solid #000000;
    border-radius:5px;
    width:50%;

}

</style>

</head>


<div class="checkoutlist">
    <h1> Please Review Your Order</h1>
    <br>
    <div class="checkoutlist-inner">
    <div>
                <?php  
                
            if($_SESSION['from']=='cart')
            {
                $query = "select * from carttemp where pid='Ac-1001'";
                $rs = my_select($query);
                echo "<table class='table table-hover' id = example>";
                echo "<thead style = 'background-color : red ; color : white'>";
                echo "<tr>";
                echo "<th>CustomerName</th>";
                echo "<th>Email ID</th>";
                echo "<th>ProductName</th>";
                echo "<th>Price</th>";
                echo "<th>Quantity</th>";
                echo "<th>Total</th>";
                echo "</tr>";

                echo "</thead>";

                echo "<tbody>";
                $amt = 0;
                while($row = mysqli_fetch_array($rs))
                {
                echo "<tr>";

                echo "<td>$row[0]</td>";
                echo "<td>$row[2]</td>";
               /* echo "<td>$row[4]</td>";
                echo "<td>$row[5]</td>";
                echo "<td>$row[6]</td>";
                echo "<td>$row[7]</td>";*/
                $amt=$amt+$row[2];
                $amt;
                echo "</tr>";
                }
                echo "<tr class=bg-secondary><td></td><td></td><td></td><td colspan='2'>Total Amount</td><td>Rs. $amt</td></tr>";
                echo "</tbody>";

                echo "</table>";
            }
            else if($_SESSION['from']=='product')
            {

                $productid=$_SESSION['productid'];
                $quantity=$_SESSION['quantity'];
                $totalamount=$_SESSION['totalamt'];
                $query = "select * from product where id='$productid'";
                $rs = my_select($query);
                echo "<table class='table table-hover' id = example>";
                echo "<thead style = 'background-color : red ; color : white'>";
                echo "<tr>";
                echo "<th>CustomerName</th>";
                echo "<th>Email ID</th>";
                echo "<th>ProductName</th>";
                echo "<th>Price</th>";
                echo "<th>Quantity</th>";
                echo "<th>Total</th>";
                echo "</tr>";

                echo "</thead>";

                echo "<tbody>";
                $amt = 0;
                while($row = mysqli_fetch_array($rs))
                {
                echo "<tr>";

                echo "<td>$username</td>";
                echo "<td>$emailid</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[4]</td>";
                echo "<td>$quantity</td>";
                echo "<td>$totalamount</td>";
                echo "</tr>";
                }
                echo "<tr class=bg-secondary><td></td><td></td><td></td><td colspan='2'>Total Amount</td><td>Rs. $totalamount</td></tr>";
                echo "</tbody>";

                echo "</table>";

            }
            else{
             //   header("location:index.php");
			 echo "payment success";
            }



                ?>

        <div>
            <center><button id="rzp-button1" class="bg-warning">Pay with Razorpay</button></center>
        </div>
        </div>
        
        
    </div>

    
<div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="verify1.php" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
</form>
<script>
// Checkout details as a json
var options = <?php echo $json?>;

/**
 * The entire list of Checkout fields is available at
 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
 */
options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
};

// Boolean whether to show image inside a white frame. (default: true)
options.theme.image_padding = false;

options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
    },
    // Boolean indicating whether pressing escape key 
    // should close the checkout form. (default: true)
    escape: true,
    // Boolean indicating whether clicking translucent blank
    // space outside checkout form should close the form. (default: false)
    backdropclose: false
};

var rzp = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp.open();
    e.preventDefault();
}
</script>