
<?php
session_start();
$conn=new mysqli("localhost","root","","realestate");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
 else
     echo" ";
$user_id=$_SESSION['user_id'];
 $sql = "SELECT * FROM user_reg WHERE user_id='$user_id'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
$name=$row['name'];
$user_id=$row['user_id'];
$email_id=$row['email_id'];
$mobile_no=$row['mobile_no'];


  }
  
}
    
?>
<!DOCTYPE html>
<html>
<head>
<title>FeedbacK Engine</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<style>
	/*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/
/*--reset--*/
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/*--start editing from here--*/
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*--end reset--*/
body {
	margin:0;
	font-family: 'Montserrat', sans-serif;
}
h1,h2,h3,h4,h5,h6,input,p,a,select,button,textarea,label{
	font-family: 'Montserrat', sans-serif;
	margin:0;
}
.clear{clear:both;}
body a{
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
	text-decoration: none;}
	
input[type="button"],input[type="submit"]{
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
h1,h2,h3,h4,h5,h6{
	margin:0;		
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}	
p{
	margin:0;
	
}
ul{
	margin:0;
	padding:0;
}
.text-center {
	text-align: center;
}
.agileits_w3layouts {
	background:url(bg2.jpg)no-repeat; 
	background-size: cover;
	background-attachment: fixed;
}
.wrap {
    padding: 2.3em;
    width: 37%;
    margin: 2em auto;
    background: rgba(1, 14, 21, 0.62);
}
h1.agile_head {
	padding-top: 1em;
	font-size: 2.5em;
	text-transform: uppercase;
	color: #fff;
	font-weight: 600;
	font-family: 'Montserrat', sans-serif;
	letter-spacing: 6px;
	line-height:1.5;
}
/* feedback-form*/
.w3layouts_main h3{
	font-size: 1em;
    color: #e6cfcf;
	line-height: 1.5;
}
.agile_form h2 {
	font-size: 0.9em;
    color:#1ec8e9;
    margin: 1em 0;
	line-height: 1.5;
  }
.agile_form  input[type=text],.agile_form input[type="email"]{
	padding: 1em;
    margin: 0em 0em 1em 0;
    color: #fff;
    width: 43%;
	font-size:0.85em;
	outline: none;
	border: 1px solid #504d4d;
	border-radius: 5px;
	background: rgba(16, 16, 16, 0.47);
	letter-spacing: 1.5px;
}
.agile_form input[type="email"] {
	margin-left:0.8em;
}
.agile_form textarea {
	font-size: 0.85em;
    color: #fff;
    padding: 0.8em 1em;
    margin-bottom: 1em;
    width: 94.5%;
    outline: none;
    resize: none;
    height: 7em;
    border: 1px solid #696867;
	border-radius: 5px;
   background: rgba(16, 16, 16, 0.47);
	letter-spacing: 1px;
}
.agile_form ul {
	list-style-type: none;
}
.agile_form ul li{
  color: #f5e7cc;
  position: relative;
 }
 .agile_form ul li input[type=radio]{
  position: absolute;
  visibility: hidden;
}
.agile_form ul li label{
   display: inline-block;
    position: relative;
    font-size: 1em;
    padding: 0.5em 0em 0.5em 2.5em;
    margin: 0px 0 0px 1em;
    z-index: 9;
    cursor: pointer;
    text-transform: capitalize;
    -webkit-transition: all 0.25s linear;
}
.agile_form ul li label:hover {
	color:#fff;
}
.checkbox {
    position: relative;
    padding-left: 38px !important;
    cursor: pointer;
}
ul li .check{
	display: block;
	position: absolute;
	border: 3px solid #d4c9c0;
	border-radius: 100%;
	height: 13px;
	width: 13px;
	top: 8px;
	left: 17px;
	z-index: 5;
	transition: border .25s linear;
	-webkit-transition: border .25s linear;
}
.agile_form ul li:hover .check {
  border: 3px solid #FFFFFF;
}

.agile_form ul li .check::before {
	display: block;
	position: absolute;
	content: '';
	border-radius: 100%;
	height: 5px;
	width: 5px;
	top: 4px;
	left: 4px;
	margin: auto;
	transition: background 0.25s linear;
	-webkit-transition: background 0.25s linear;
}

.agile_form input[type=radio]:checked ~ .check {
  border: 3px solid rgb(233, 156, 30);
}

.agile_form input[type=radio]:checked ~ .check::before{
  background: #eccff1;
}

.agile_form input[type=radio]:checked ~ label{
  color: #FFC107;}
.textarea.w3l_summary {
	 min-height: 4em;
	 background: rgba(25, 5, 20, 0.48);
	 font-size: 0.85em;
}

.agile_form  input[type="submit"] {
	width:30%;
	text-transform: uppercase;
    outline: none; 
    border: none;
    cursor: pointer;
	color: #f5ecf1;
	font-size:0.85em;
	font-weight: 600;
	padding: 0.85em 0;
	letter-spacing: 1px;
	border-radius: 5px;
	border: 1px solid #696867;
    background: rgba(16, 16, 16, 0.47);
}

.agile_form input[type="submit"]:hover{
	color: #ffc107;
    background:rgba(25, 23, 24, 0.23);
}

i.icon_agileits {
	color: #000;
	margin-right: 0.5em;
}
.agileits_copyright  p{
	font-size: 16px;
    color: #fee8d3;
	padding-bottom: 2em;
    line-height: 2;}
.agileits_copyright  a {
      color: #fee8d3;
}	
.agileits_copyright a:hover {
	color: #FFC107;
	text-decoration: none;
}

/* // feedback-form*/

/* -- Responsive code -- */

@media screen and (max-width: 1440px){
    .agile_form h2 {
		font-size: 0.95em;}
	
	.agile_form input[type=text], .agile_form input[type="email"] {
		width: 43%;}
	
}	
@media screen and (max-width: 1366px){
	.wrap {
	padding: 2.5em;
	width: 37%;}
	
	.agile_form input[type=text], .agile_form input[type="email"] {
	width: 42.5%;}
	
	.agile_form textarea {
    width: 94%;}
}	
@media screen and (max-width: 1280px){
	.agile_form  input[type=text],.agile_form input[type="email"]{
		width: 42%;
	}
	.agile_form textarea {
		width: 93.8%;}
}
@media screen and (max-width: 1080px){
	.agile_form input[type=text], .agile_form input[type="email"] {
    width: 41.3%;}
	
    .agile_form textarea {
     width: 94%;}
	 
	 .wrap {
     width: 40%;}
	
}	
@media screen and (max-width: 1024px){
    h1.agile_head {
       font-size: 2.3em;}
	.wrap {
    width: 50%;}
	.agile_form input[type=text], .agile_form input[type="email"] {
    width: 42.7%;}
	
}
@media screen and (max-width: 991px){
	.wrap {
    width: 52%;}
	
	.w3layouts_main h3 {
    font-size: 0.9em;}
	
	.agile_form ul li label {
	font-size: 0.9em;
    padding: 0.7em 0em 0.5em 2.5em;
	margin: 0px 0 0px 1.2em;}
    	
}
@media screen and (max-width: 900px){
  
	.wrap {
    width: 45%;}
}
@media screen and (max-width: 800px){
	.wrap {
    width: 55%;}
	.agile_form input[type=text], .agile_form input[type="email"] {
    width: 41.4%;}
	.agile_form textarea {
    width: 93%;}
}
@media screen and (max-width: 768px){
	.wrap {
    width: 57%;}
}
@media screen and (max-width: 736px){
	.wrap {
    width: 59%;}
	
	.agile_form textarea {
    font-size: 0.8em;}
	
	.agile_form input[type=text], .agile_form input[type="email"] {
    font-size: 0.8em;}
	
	.agileits_copyright p {
    font-size: 0.9em;}
	
	.agile_form input[type="submit"] {
    font-size: 0.8em;}
	
	h1.agile_head {
    font-size: 2.1em;}
 }   
@media screen and (max-width: 667px){
	
	.wrap {
    width: 63%;}
}
@media screen and (max-width: 640px){
	.wrap {
    width: 67%;}
}
@media screen and (max-width: 600px){
	.wrap {
    width: 70%;}
	
	h1.agile_head {
    padding-top: 1.3em;
    font-size: 2em;
    letter-spacing: 4px;}
}
@media screen and (max-width: 568px){
	.wrap {
    width: 74%;}
}
@media screen and (max-width: 480px){
	
	.wrap {
     margin: 1em auto;
	 width: 74%;}
	 
	 .agile_form textarea {
    width: 91%;
	margin-bottom:0;}
	
	.agile_form input[type=text], .agile_form input[type="email"] {
    width: 91%;
	margin: 1em 0 0;
	font-size: 0.7em;}

	.agile_form input[type="submit"] {
	margin-top: 1em;
	font-size: 0.8em;}
	
	h1.agile_head {
    font-size: 1.8em;}
	
	.w3layouts_main h3,.agile_form h2{
     font-size: 0.9em;}
	 
	.agile_form ul li label {
     font-size: 0.9em;
	 padding: 0.7em 0em 0.5em 2.5em;}
	 
	 ul li .check {
     height: 10px;
	 width: 10px;
     top: 11px;
	 }
	 
	 .agile_form ul li .check::before {
	 height: 4px;
     width: 4px;
     top: 3px;
	 left: 3px;}
	 
	 .agileits_copyright p{
   	 padding-bottom: 1em;}
	 
	  .agileits_copyright a{
		  padding:0; }
		  
	.agileits_copyright p {
	 font-size: 15px;}
}
	
@media screen and (max-width: 414px){
	.agileits_copyright p, .agileits_copyright a {
	 font-size: 14px;}
	 
	.w3layouts_main h3, .agile_form h2 {
    font-size: 0.9em;}
}
@media screen and (max-width: 384px){
	.agileits_copyright p {
    padding: 0.5em;}
	
h1.agile_head {
    font-size: 1.8em;}	
	
.wrap {
    margin: 1.7em auto;}
	
.agileits_copyright p {
    padding: 1em;}	
}
@media screen and (max-width: 375px){
  h1.agile_head {
    font-size: 1.6em;
    letter-spacing: 2px;}
}
@media screen and (max-width: 320px){
    .wrap {
	 padding: 1.5em;
    margin: 0.5em auto;}
	
	h1.agile_head {
    font-size: 1.3em;
    padding-top: 1em;
	letter-spacing: 2px;}
	
	.w3layouts_main h3, .agile_form h2 {
    font-size: 0.8em;}
	
	input[type=radio]:checked ~ label {
    font-size: 0.9em;}
	
	.agile_form ul li label {
     padding: 0.7em 0em 0.5em 2.5em;}
	
	ul li .check {
    top: 9px;}

    .agile_form textarea {
    height: 6em;}
	
	.agile_form input[type=text], .agile_form input[type="email"] {
      font-size: 0.7em;}
	
	.agile_form input[type="submit"] {
    font-size: 0.7em;}
	
    .agileits_copyright p {
    padding: .6em;}

	
}





	</style>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets1/css/styles.css">

        <title>Userdashboard</title>
</head>
<body class="agileits_w3layouts">

<div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="userdashboard.php" class="nav__link nav__logo">
                       <i class='bx bxs-home-smile'></i> 
                        <span class="nav__logo-name">Home Genie</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="userdashboard.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="userviewprofile.php" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Profile</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="userviewprofile.php" class="nav__dropdown-item">View Profile</a>
                                        <a href="userupdateprofile.php" class="nav__dropdown-item">Update Profile</a>
                                       
                                    </div>
                                </div>
                            </div>

                            <a href="feed.php" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Feedback</span>
                            </a>
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Seller</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="sellerprop.php" class="nav__dropdown-item">Add Property</a>
                                        <a href="upsellertb.php" class="nav__dropdown-item">Update/Delete</a>
                                        
                                    </div>
                                </div>

                            </div>

                            <a href="cart.php" class="nav__link">
                                <i class='bx bx-library nav__icon' ></i> 
                                <span class="nav__name">Property Listing</span>
                            </a>
                            <a href="myaccount.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Interested</span>

                                <a href="usersideb1.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">News</span>
                            
                            
                            </a>
                        </div>
                    </div>
                </div>

                <a href="index.html" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
       

        <!--========== MAIN JS ==========-->
        
   <div>
    
    <h1 class="agile_head text-center">Feedback Form</h1>
    
    <div class="w3layouts_main wrap">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
	    <form action="feedback.php" method="post" class="agile_form">
		  <h2>How satisfied were you with our Service?</h2>
			 <ul class="agile_info_select">
			 	
				 <li><input type="radio" name="feedback" value="excellent" id="excellent" required> 
				 	  <label for="excellent">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="feedback" value="good" id="good"> 
					  <label for="good"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="feedback" value="neutral" id="neutral">
					 <label for="neutral">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="feedback" value="poor" id="poor"> 
					  <label for="poor">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="suggestions" required></textarea>
			<input type="text" placeholder="Your User Id " name="user_id" value="<?php echo $user_id ?>"readonly/> 
			<input type="text" placeholder="Your Name " name="fname" value="<?php echo $name ?>"readonly/>  
			<input type="email" placeholder="Your Email " name="femail" value="<?php echo $email_id ?>"readonly/> 

			<input type="text" placeholder="Your Number (optional)" name="phone" value="<?php echo $mobile_no ?>"  pattern="[0-9]*" maxlength="10" minlength="10" readonly /><br>
			<center><input type="submit" value="submit" class="agileinfo" /></center>
	  </form>
	</div>
<script src="assets1/js/main.js"></script>	
</body>
</html>



