<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <title></title>

<style>
    *,
*::before,
*::after {
  box-sizing: border-box;
}

.row{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
  max-width: 1200px;
  margin: 0 auto;
}

body {
   font-family: montserrat;
   background-image: url('userinfopng.png');
   background-repeat:no-repeat;

}
nav{
  width:100%;height:100px;background:none;display:flex;
}
nav ul li a
{
  display:block;
  margin:10px 0;
  padding:10px 20px;
  text-decoration:none;
  color:black;
}
nav ul li a.active,
nav ul li a:hover
{
  background:#FFAE19;
  color:#ffffff;
  transition:0.5s;
}
.menu{
  width:100%;
  height:90px;
}
.menu ul{ width:100%;height:100px;display:flex;flex-direction:row;
justify-content:space-around;align-items:center; }
.menu ul li{
  list-style:none;font-size:12px;
  font-weight:bold;text-transform:uppercase;
}

.btn1{
  color: black;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 30%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);
 
}

.btn1:hover {
  background-color: rgba(255, 255, 255, 0.12);
}

.btn2{
  color: black;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 50%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);

}

.btn2:hover {
  background-color: rgba(255, 255, 255, 0.12);
}


.card-title {
  color: black;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card-text {
  padding: 1rem;
  
}
.card-body{
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card{
  margin-left: 50px;
  margin-top: 40px;
  margin-bottom: 60px;
  text-align:center;
}


</style>

</head>
<body>


    <div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                   <b>Post has been added successfully</b>
                </div>
            <?php }?>
        <?php } ?>

        <!-- Create a new Post button -->
        <center>
		<br><br>
        <div class="text-center">
            <a href="blog.php" class="btn1">+ Create a new post</a>
        </div>
    </center>
        <br><br>
        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
						<br>
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                

                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn2">Read More <span class="text-dangers">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
       
    </div>

   
</body>
</html>
