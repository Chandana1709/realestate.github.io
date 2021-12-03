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
   body{
  font-family:'Montserrat', sans-serif;
  background-image: url('');
  background-repeat: no-repeat;

}
    .t1{
        border-radius:10px;
        background: #ecf0f1;
        border:#ccc 1px solid;
        padding:20 px;
        width:400px;
        font-size:2em;
        text-align:center;
        font-family:montserrat;
        height:1em;

    }

    .ta{
        border-radius:10px;
        background: #ecf0f1;
        border:#ccc 1px solid;
        padding:20 px;
        width:700px;
        font-size:1.6em;
        font-family:montserrat;
        height:15em;

    }

    .btn{
        display:inline-block;
        padding:12px 24px;
        background:#ecf0f1;
        font-weight:bold;
        color:rgb(120, 120, 120);
        border:none;
        outline:none;
        border-radius:3px;
        cursor:pointer;
        transition:ease .3s;
        
		float:left;
		margin-left:300px;
        
    }
    .btn:hover{
        background:#ecf0f1;
        color:black;
    }
	.homebtn{
        display:inline-block;
        padding:12px 24px;
        background:#ecf0f1;
        font-weight:bold;
        color:rgb(120, 120, 120);
        border:none;
        outline:none;
        border-radius:3px;
        cursor:pointer;
        transition:ease .3s;
       
		float:left;
		margin-left:600px;
        
    }
    .homebtn:hover{
        background:#ecf0f1;
        color:black;
    }



   </style>

 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">



</head>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bxs-user nav__icon'></i> 
                        <span class="nav__logo-name">Admin</span>
                    </a>

                    <div class="nav__list">
                        <a href="admindashboard.php" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="adminviewprofile.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Users</span>
                        </a>
                         <a href="adminay.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Overview</span>
                        </a>

                        
                        <a href="propadd.php" class="nav__link">
                            <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name"> Add Property </span>
                        </a>
                        
                            <a href="up2.php" class="nav__link">
                            <i class='bx bx-pencil nav__icon' ></i>
                            <span class="nav__name">Update/Delete</span></a>

                          
                      
                       <a href="newadreg.html" class="nav__link">
                            <i class='bx bx-user-plus nav__icon'></i> 
                            <span class="nav__name">Add Admin</span>
                        </a>

                          
                      <a href="fetch.php" class="nav__link">
                            <i class='bx bx-book-heart nav__icon'></i> 
                            <span class="nav__name">Favorites</span>
                        </a>

                        <a href="viewfeedback.php" class="nav__link">
                            <i class='bx bx-box nav__icon' ></i> 
                            <span class="nav__name">Feedback View</span>
                        </a>
                               
                        <a href="blog.php" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">Article </span>
                        </a>



                        <a href="home.html" class="nav__link">
                            <i class='bx bx-log-out nav__icon'></i>
                            <span class="nav__name">Logout</span>
                        </a>
                    </div>
                </div>

               
            </nav>
        </div>


   <div class="container mt-5">
        <form method="POST" action="" enctype="multipart/form-data">
            <center>
            <input type="text" placeholder="Blog Title" class="t1" name="title" >
            <br><br><br>
           
            <textarea name="content" class="ta" cols="150" rows="30"></textarea>
            <br><br>
             
            <input type="file" id="image-file"   name="image_file" multiple/>
            <button class="btn" name="new_post">Add Post</button>
			
         <a href="index3.php" class="homebtn">Home</a>
		</center>
        </form>
   </div>

  <script src="assets/js/main.js"></script>
 
</body>
</html>
