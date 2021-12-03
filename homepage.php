<?php 
 session_start();
 error_reporting(0);
 $con= mysqli_connect("localhost", "root", "", "realestate");

 $user_id= $_SESSION['user_id'];
 //echo $email; 
  $sql="select * from user_reg where user_id='$user_id'";
  $result= mysqli_query($con, $sql);

  if(mysqli_num_rows($result) > 0 )
 {
  $_SESSION['user_id'] = $user_id;
  while ($row = mysqli_fetch_assoc($result))
  {
    $userRegDate = $row['reg_date'];
    //echo $userRegDate;
    $_SESSION['userRegDate'] = $userRegDate;
    $membershipends = date("y-m-d",strtotime(date("y-m-d",strtotime($_SESSION['userRegDate'])). " + 15 days"));
  }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel = "icon" href ="logo.png">
 
 <script src="https://kit.fontawesome.com/ad6ef16050.js" crossorigin="anonymous"></script>
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'KoHo', sans-serif;
  }

  .user {
    text-align: right;
    white-space: nowrap;
    display: inline;
    float: right;
    margin-right: 15px;
    font-size: large;

  }
  body {
    font-family: 'KoHo', sans-serif;
    /*background: linear-gradient(90deg, #141414 100%, #1D1B1B 0%); */
    font-size: 22px;
    color: #3276AD;


  }
  .sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    overflow-x: hidden;
    padding-top: 15px;
    background-color: #fafbff;

  }
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }

  .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    display: block;
  }
  input[type="text"],
  {
    font-size: 20px;
    width: 300px;
    height: 30px;
    padding: 5px;
    margin: 2px 2px 15px 0;
    display: inline-block;
    border: transparent;
    background: transparent;
    line-height: 1px;
    color: black;
    text-align: center;
  }
  .card{
    width: 245px;
  }
  .btn {
    background-color: transparent;
    border: none;
    font-size: 16px;
    cursor: pointer;
  }

  a:link {
    font-size: 20px;
  color:#2D8AD5;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: #2D8AD5;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: #3276AD;
  background-color: transparent;
  text-decoration: ;
}
a:active {
  color: #3276AD;
  background-color: transparent;
  text-decoration: underline;
}



  /* Darker background on mouse-over */
  .btn:hover {
    background-color: transparent;
  }
  
.forsearch{
    float: right;
   }
  .dropdown {
    text-align: right;
    white-space: nowrap;
    padding-top: 12px;
    float: right;
    margin-right: 15px;
    font-size: large;
    position: relative;
    font-size: 20px;

  }
  .dropdown:hover .dropdown-list{
    opacity: 1;
    visibility: visible;
  }
.dropdown-select{
  padding: 1 rem;
 padding-left: 4px;
  border-radius: 4px ;
  width: 85px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  cursor: pointer;
}
.dropdown-list{
  border-radius: 4px;
  position: absolute;
  visibility: hidden;
  transition: opacity 0.2s linear, visibility 0.2s linear;
  
 }
.dropdown-list_item{
  padding: 1px;
}
   

</style>
</head>
<body>
  <?php if (date("y-m-d") < $membershipends ) {?>
  <div style="padding-left: 200px;font-size: 10px;"></div>
<?php 
} else{ ?>
  <script type="text/javascript">
    alert("Free trial has ended...Please choose a plan to continue");
    window.location.href="plan.php";
  </script>

<?php } ?>
  <div class="dropdown">
    <div class="dropdown-select">
         <span class="select">Profile </span>
         <i class="fa fa-user" aria-hidden="true"></i>
     </div>
  <div class="dropdown-list">
   <a href="account.php"> <div class="dropdown-list_item">Account</div></a>
   <a href="logout.php"> <div class="dropdown-list_item">Sign out</div></a>
  </div>
 </div>
    
     
</div>
<div class="forsearch" style="padding-top:12px;">
      <form action="search.php" method="POST">
    
       <input type="text" name="search" placeholder="search"  required=""  style=" width: 180px; height: 30px; line-height: 15px; font-size: 16px; padding-left: 10px;" >

       <button type="submit" name="submit-search" style="background: white;
      font-size: 16px; width: 30px; "><i class="fas fa-search"></i></button>
  
    </form>
    </div>

<div class="sidenav">
 
  <a href="homepage.php"><img src="logop.png" alt="home" style="width: 140px; padding-bottom: 15px;"></a> 
 
    
 <a href="homepage.php"><i class="material-icons" style="font-size:25px;padding-right: 5px;">home</i>Home</a></li>
  <a href="library.php"><i class="material-icons" style="padding-right: 5px;">library_music
  </i>Library</a>
 
  <a href="podcast.php"><i class="material-icons" style="font-size: 25px; padding-right: 5px;">podcasts</i>Podcast</a>
  <br><br>
 <a href="myplaylist.php"><i class="material-icons" style="font-size: 25px; padding-right: 5px;">
  playlist_add</i>Create Playlist</a>
  <a href="favorite.php"><i class="material-icons" style="font-size: 25px; padding-right: 5px;">
favorite</i> Liked songs</a>
 
</div>
<br><div style="padding-left: 190px; padding-top: 5.5%;">
<div class="container">
  <div class="row">
    <?php
      $sql = "SELECT * from media";
  $res = mysqli_query($con,$sql);
        while ($row=mysqli_fetch_assoc($res)) {
    ?>
    <div class="col-md-3">
      <div class="card" >
        <div class="card-body">
          <a href="single.php?id=<?=$row['id'];?>" style="color: #3276AD; text-decoration:none; "><img src="cover/<?=$row['image'];?>" 
            class="rounded" alt="image" width="200px" height="180px"  style="padding-bottom: 10px; ">
          <h4 class="card-title"><?php echo $row['name']?></h4>
          <h5 class="card-text"><?php echo $row['category']?></h5></a>
        </div>
      </div><br>
    </div>
  <?php } ?>
  </div>
</div>
</div>



</body>
</html> 
