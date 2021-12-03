<?php

//process_data.php

if(isset($_POST["name"]))
{
 $name = '';
 $user_id = '';
 $email_id = '';
 $mobile_no = '';
 $password = '';
 $confirmpassword = '';

 $name_error = '';
 $user_id_error = '';
 $email_id_error = '';
 $mobile_no_error = '';
 $password_error = '';
 $confirmpassword_error = '';
 $captcha_error = '';

 if(empty($_POST["name"]))
 {
  $name_error = ' name is required';
 }
 else
 {
  $name = $_POST["name"];
 }

 if(empty($_POST["user_id"]))
 {
  $user_id_error = 'user Id is required';
 }
 else
 {
  $user_id = $_POST["user_id"];
 }
 if(empty($_POST["email_id"]))
 {
  $email_id_error = 'Email is required';
 }
 else
 {
  if(!filter_var($_POST["email_id"], FILTER_VALIDATE_EMAIL))
  {
   $email_id_error = 'Invalid Email';
  }
  else
  {
   $email_id = $_POST["email_id"];
  }
 }
 if(empty($_POST["mobile_no"]))
 {
  $mobile_no_error = 'Mobile no is required';
 }
 else
 {
  $mobile_no = $_POST["mobile_no"];
 }

 if(empty($_POST["password"]))
 {
  $password_error = 'Password is required';
 }
 else
 {
  $password = $_POST["password"];
 }
if(empty($_POST["confirmpassword"]))
 {
  $password_error = 'confirmPassword is required';
 }
 else
 {
  $confirmpassword = $_POST["confirmpassword"];
 }
 if(empty($_POST['g-recaptcha-response']))
 {
  $captcha_error = 'Captcha is required';
 }
 else
 {
  $secret_key = '6Ldv2bcUAAAAAFXUKdLW_qljFd9FpxNguf06DHhp';

  $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);

  $response_data = json_decode($response);

  if(!$response_data->success)
  {
   $captcha_error = 'Captcha verification failed';
  }
 }

 if($name_error == '' && $user_id_error == '' && $email_id_error == ''  && $mobile_no_error == ''&& $password_error == ''&& $confirmpassword_error == '' && $captcha_error == '')
 {
  $data = array(
   'success'  => true
  );
 }
 else
 {
  $data = array(
   'name_error' => $name_error,
   'user_id_error' => $user_id_error,
   'email_id_error'  => $email_id_error,
   'mobile_no_error'  => $mobile_no_error,
   'password_error' => $password_error,
    'confirmpassword_error' => $confirmpassword_error,
   'captcha_error'  => $captcha_error
  );
 }

 echo json_encode($data);
}

?>

