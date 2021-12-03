<!DOCTYPE html>
<html>
<head>
   
  <title>Registerform</title>
  <style>
    *{
  margin:0px;
  padding:0px;
}
body{
  font-size:80%;
  background-image: url('userreg.png');
  font-family: montserrat;
  background-size:cover;
  background-repeat: no-repeat;

}

.header{
   width:26.5%;
   margin:45px auto 0px;
   color:white;
   background: #217C7E;
   text-align:center;
   border:1px solid #B0C4DE;
   border-bottom:none;
   border-radius:10px 10px 0px 0px;
   padding:10px;
   font-size:16px;
}
form, .content{
  width:25%;
  margin:0px auto;
  padding:20px;
  border:1px solid #80C4DE;
  background:white;
  border-radius:0px 0px 10px 10px;
}
.input-group{
  margin:10px 0px 10px 0px;
}
.input-group label{
  display:block;
  text-align:left;
  margin:3px;
  font-size:16px;
}
.input-group input{
  height:30px;
  width:90%;
  padding:5px 10px;
  font-size:16px;
  border-radius:5px;
  border:1px solid gray;
}





.button1{
  padding:15px 30px;
  font-size:15px;
  color:white;
  background:#217C7E;;
  border:none;
  border-radius:4px;
  text-decoration:none;
  display:inline block;
  margin:3px 1px;
  transition-duration:0.4s;
}


}

.success{
  color:#3C763D;
  background:#dff0d8;
  border:1px solid #3c763d;
  margin-bottom:20px;
}
  </style>
</head>
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
<body>

  <div class="header">
    <h2>Register</h2>
     </div>
      
        <form action="user_reg.php" method="POST" onsubmit="return submitUserForm();" style="text_align:centre;">
      <div class ="input-group">
        <label><b>User Name</b></label>
        <div class ="input-group"> 
        <input type ="text" name="name" id="name"  placeholder = "Full Name" required>
        
      </div>
         <div class ="input-group">
        <label><b>User ID</b></label>
        
        <input type ="text" name="user_id" id="user_id" pattern="[A-Za-z0-9]{8}" title="Can contain letters and numbers which is of 8 characters" placeholder = "User Id" required>
        
      </div>
       <div class ="input-group">
       <label><b>Email Id</b></label>
        
        <input type ="text" name="email_id" id="email_id"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder = "Email Id" required>
         
      </div>
       <div class ="input-group">
      <label><b>Mobile No</b></label>
        
        <input type ="text" name="mobile_no" id="mobile_no"  pattern="[0-9]*" maxlength="10" minlength="10" placeholder = "Mobile No" required>
         
      </div>

        <div class ="input-group">
          <label><b>Password</b></label>
                   <input type="password" name="password" id="password" placeholder="password" pattern="(?=.*\d)(?=.*[A-Z]).{6,}" title="Must contain atleast one number and one uppercase letter and have atleast 6 or more characters" required>
                                     </div>
                  <label><b> Confirm Password</b></label>
                   <input type="password" name="confirmpassword" id="confirmpassword" placeholder=" Confirm Password" required>
                 
                   <div class="input-group">
       <div class="g-recaptcha" data-callback="verifyCaptcha" data-sitekey="6LcoA8QbAAAAALWlCxUEnz3T8n6HXkNAk7h7v5Ck" ></div>
       <div id="g-recaptcha-error"></div>
      </div>

           <input class="button1" type="submit" value="Register" id="Register" onclick="return checkpassword(form)" ><br>
          
              
           

         <p><b>Already have an account??<a href="login.html">Login</a></b></p>
        </div>

</form>
 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    console.log(response.length);
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
  console.log('verified');
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script> 
</body>
</html>
