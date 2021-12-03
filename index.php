

<!DOCTYPE html>
<html>
<head>
	<title>FETCH DATA FROM DATABASE</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
    .button {

  background-color: #009999; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;

}
.button3 {font-size: 24px;
}

</style>
    
</head>
<body>
    <a class="fa fa-arrow-right" href="userdashboard.php" style="font-size:50px; color: black; margin-left: 00%; margin-top :-04px;text-decoration: none;" ></a>

    
    <table align="center" border="1px" style="width:900px; line-height:90px; align-content: center; background-color: peachpuff">
    	<tr>
    		<th colspan="10"><h2><u>PROPERTY DETAILS</u></h2></th>
    	</tr>
    	<t>
    		<th> PROPERTY NAME </th>
        <th>NAME </th>
    		<th> PROPERTY STATUS </th>
    		<th>CITY </th>
    		
    		
    		<th> SPECIALITY OF PROPERTY</th>
        <th>PHONE NO</th>
    		
    	</t>

    	<?php
        session_start();
    	
  $conn=new mysqli("localhost","root","","realestate");
  if($conn->connect_error)
   die("connection failed ".$conn->connect_error);
  else
   /*echo "<br> connection successful";*/

 if(isset($_GET['property_id']))
 {

  $property_id=$_GET['property_id'];
    	$sql=mysqli_query($conn," SELECT * FROM property WHERE property_id='$property_id'");
        /*$res=$conn->query($sql);*/

    	while($row=mysqli_fetch_array($sql))
    	{
    		?>
    		<tr>

    			<td><?php echo $row['type_of_property']; ?></td>
          <td><?php echo $row['seller_name']; ?></td>
    			<td><?php echo $row['availability_status']; ?></td>
    			<td><?php echo $row['city']; ?></td>
    			
    			
    			<td><?php echo $row['special_prop1']; ?></td>
    			<td><?php echo $row['seller_contact_no']; ?></td>
    			
                <a href="http://localhost/project 2/index.php?property_id=<?php echo $property_id; ?>&user_id=<?php echo $_SESSION['user_id']; ?>" button class="button button3" >INTERESTED </a>
    		</tr>
            <tr>

        <!--<form action="index.php?pid=<?php echo $pid?>&uid=<?php echo $_SESSION['uid']?>" method="GET">
<input type="submit" name="submit" value="submit"><br>
</form>-->
</tr>
<?php
                                

                }
            }
            if(isset($_GET['user_id']))
            {
                 date_default_timezone_set('Asia/Kolkata');
                 $date = date('d-m-y h:i:s');
                /* echo $date;
                /*$time=date("d-m-Y");*/

                $sql="insert into interested values (".$_GET['property_id'].",".$_GET['user_id'].",'".$date."')";
                if($conn->query($sql)==TRUE)
    echo "YOUR INTERESTED IS RECORDED";
  else
    echo"error:".$sql."<br>" .$conn->error;
                          }
                 mysqli_close($conn);
                ?> 
    </table>
</body>
</html>

