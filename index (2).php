

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
    <a class="fa fa-arrow-right" href="userhome.html" style="font-size:50px; color: black; margin-left: 00%; margin-top :-04px;text-decoration: none;" ></a>

    
    <table align="center" border="1px" style="width:900px; line-height:90px; align-content: center; background-color: peachpuff">
    	<tr>
    		<th colspan="10"><h2><u>PROPERTY DETAILS</u></h2></th>
    	</tr>
    	<t>
    		<th> PROPERTY NAME </th>
    		<th> PROPERTY STATUS </th>
    		<th> PROPERTY SIZE </th>
    		<th> COST </th>
    		<th> ADDRESS </th>
    		<th> DESCRIPTION </th>
    		<th> OWNER </th>
    	</t>

    	<?php
        session_start();
    	
  $conn=new mysqli("localhost","root","","rems");
  if($conn->connect_error)
   die("connection failed ".$conn->connect_error);
  else
   /*echo "<br> connection successful";*/

 if(isset($_GET['pid']))
 {

  $pid=$_GET['pid'];
    	$sql=mysqli_query($conn," SELECT * FROM property WHERE pid='$pid'");
        /*$res=$conn->query($sql);*/

    	while($row=mysqli_fetch_array($sql))
    	{
    		?>
    		<tr>

    			<td><?php echo $row['pname']; ?></td>
    			<td><?php echo $row['pstatus']; ?></td>
    			<td><?php echo $row['psize']; ?></td>
    			<td><?php echo $row['cost']; ?></td>
    			<td><?php echo $row['address']; ?></td>
    			<td><?php echo $row['description']; ?></td>
    			<td><?php echo $row['owner']; ?></td>
    			
                <a href="http://localhost/project/index.php?pid=<?php echo $pid; ?>&uid=<?php echo $_SESSION['uid']; ?>" button class="button button3" >INTERESTED </a>
    		</tr>
            <tr>

        <!--<form action="index.php?pid=<?php echo $pid?>&uid=<?php echo $_SESSION['uid']?>" method="GET">
<input type="submit" name="submit" value="submit"><br>
</form>-->
</tr>
<?php
                                

                }
            }
            if(isset($_GET['uid']))
            {
                 date_default_timezone_set('Asia/Kolkata');
                 $date = date('d-m-y h:i:s');
                /* echo $date;
                /*$time=date("d-m-Y");*/

                $sql="insert into interested values (".$_GET['pid'].",".$_GET['uid'].",'".$date."')";
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

