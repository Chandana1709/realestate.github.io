<?php

session_start();
$conn=new mysqli("localhost","root","","realestate");
        if($conn->connect_error)
        die("connection failed".$conn->connect_error);
        else
        echo " ";
    error_reporting(0);

$user_id = $_SESSION["user_id"];
$query="select * from user_reg where user_id='".$user_id."'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
    $user_id=$row['user_id'];

}


    if(isset($_POST['submit']))
    {
      $user_id=$_POST['user_id'];
      $query="SELECT * FROM user_reg where user_id='$user_id'";
      $query_run=mysqli_query($conn,$query);

    }

?>


      
      
                     
      
<html>
<head>
<title>Change Password</title>

<link rel="stylesheet">
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
            background: #f1f5f9;
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


  <script>
       function checkpassword(form){
       password = form.password.value;
       confirmpassword = form.confirmpassword.value;
       if(password != confirmpassword){
       alert("Passwords did not match!\nPlease enter same password in both the fields.")
       return false;
       }
       else{
       return true;
       }
    }
</script>

</head>
<body>
    <section>
    <div class="container">
      <div class="admin signinBx">
        <div class="formBx">
    <form  method="post" action="changepass1.php">

                    <h2>Change Password</h2>
                                              

                  <input type="text" placeholder="User Name" name="user_id" required value="<?php echo $user_id ?>">

                  <input type="password"  placeholder="Enter Password" name="password" required id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
                 
                                      
                  
                  <input type="submit" value="submit" name="submit" onclick="return checkpassword(form)";>
    </form>
</div>
</div>
</body>
</html>