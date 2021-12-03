<?php      
 
          $conn=new mysqli("localhost","root","","realestate");
         if($conn->connect_error)
         die("connection failed".$conn->connect_error);
         else
         echo" ";
         
       
    if(isset($_POST['sendmail'])){
    $email_id=$_POST['email_id'];
                 
        $sql = "select * from user_reg where email_id = '$email_id'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

$subject='HomeGenie!';
$message="Dear Customer,\r\n\r\n";
$message.="You have requested to reset your password.\r\n";
$message.="Please click on the link to reset your password http://localhost/project2/changepswd.php \r\n\r\n";
$message.="Best Regards,\r\n";
$message.="";
$headers="from:homegenie2021@gmail.com";
$headers.="Content-type:text/html\r\n";
         
        if($count == 1){
           echo'<script>alert("To Reset Your Password.Please Check Your E-mail ")</script>';
           
            /*$data=mysqli_query($conn,$query);*/
            mail($email_id, $subject, $message,$headers);
        }  
        else{  
            echo'<script>alert("Please Enter Valid Email-Id")</script>';
           }
        }
?>          



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HomeGenie</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
 
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        section{
            position: relative;
            min-height: 70vh;
            
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            transition: 0.5%;
        }
        section .container{
            position: relative;
            width: 400px;
            height: 300px;
            background: #fff;
            box-shadow: 0 0 5px 3px #24487f;
            overflow: hidden;
        }

        section .container .admin{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
        }
        section .container .admin .formBx{
            position: relative;
            width: 50%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            transition: 0.5s;
        }
        section .container .admin .formBx h2{
            font-size: 20px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
            width: 250%;
            margin-bottom: 10px;
            color: #555;
        }
        section .container .admin .formBx input{
            width: 250%;
            padding: 10px;
            background: #f5f5f5;
            color: #333;
            border: none;
            outline: none;
            box-shadow: none;
            font-size: 14px;
            margin: 8px 0;
            letter-spacing: 1px;
            font-weight: 300;
            border: 1px solid #000;
        }
        section .container .admin .formBx input[type="submit"]{
            max-width: 100px;
            background: #24487f;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            transition: 0.5s;
        }
        @media (max-width: 991px){
            section .container {
               max-width: 400px;
            }
        }
</style>
</head>
<body >
    <nav class="navbar navbar-expand-md badge-dark navbar-red" style="width: 100%; background-color: #24487f" >
    
    <a class="navbar-brand" style="color: white; font-size: 37px; font-family: serif;"><i class="fas fa-home" style="font-size:30px"></i>HOMEGENIE</a>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        
       <li class="nav-item">
          <a href="login.html" style="margin-left: 900px;  font-size: 30px;font-family: sans-serif;color: white;">Login</a>
        </li>
        
      
      </ul>
    </div>
  </nav>
 
    <section>
    <div class="container">
      <div class="admin signinBx">
        <div class="formBx">
    <form action="forgotpassword.php" method="POST">

                    <h2>Forgot Password</h2>
             
                  <input type="text" placeholder="E-mail" name="email_id" autocomplete="off" required>

                  <input type="submit" value="Send Mail" name="sendmail">
    </form>
</div>
</div>
</body>

</html>


