<?php 
//session_start();
//error_reporting(0);
$con= mysqli_connect("localhost","root", "", "realestate");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Plans</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" href ="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style >
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'KoHo', sans-serif;
		color: black;
	}
	.sidenav{
		float: left;
		margin-top: 20px;
		margin-left: 60px;
	}
	.btn  {  
	  font-size: 20px;
      display: inline-block;
      color: #2D8AD5 ;
      padding: 5px 20px;
      margin: 8px 0;
      border: 2px solid #2D8AD5;
      line-height: 15px;
      border-radius: 2px;
      background-color: white;
      cursor: pointer;
      width:  235px;
      height: 45px;
      opacity: 0.9;
      transition: .5s;
  }
.btn:hover
{
      font-size: 22px;
      color: #3276AD; ;
      border: 2px solid #3276AD;;
     background-color: #fafbff;
   
}
</style>
</head>
<body>
	<div class="sidenav">
  
  <a href=""><img src="" alt="home" style="width: 140px;"></a>

</div>
<br>
	<div class="container text-center py-5">
		<h1 class="display-5"> Plans and Pricing</h1>
	</div>	
	<form method="post">
		
		
			<div class="container text-center">

				<div  class="row row-cols-1 row-cols-md-3">
					<?php
				$sql = "SELECT * from plan";
		$res = mysqli_query($con,$sql);
		while ($row=mysqli_fetch_assoc($res)) {
			?>

					<div class="col mb-4">

						<div class="card shadow-sm">


							<div class="card-header">

								<h3 ><?php echo $row['planname']?></h3>
							</div>
							<div class="card-body">
								<h1 class="my-0 font-weight-normal" name="planamt">&#8377 <?php echo $row['planamt']?>
								<small class="text-muted"><?php echo $row['planduration']?></small></h1>
								<ul class="list-unstyled mt-3 mb-4 ">
									<li><?php echo $row['plandesc']?></li>
									<li> ...........</li>

								</ul>
								<button class="btn"><a href="paytm/TxnTest.php?planid=<?=$row['planid'];?>" style="text-decoration: none;"> Select plan</button></a>
							</div>
						</div>
						
				</div> 
                   <?php
					}
					?>
			</div>
			

		</div>

	</form>


			</body>	 
			</html>
			<?php
			session_unset();
			session_start();
			session_unset();
			session_destroy();
			?> 	

