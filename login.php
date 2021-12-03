<?php
require_once 'vendor/autoload.php';
$clientID='949734410942-ja72som1d5t38f729950d5rutfkn9aq5.apps.googleusercontent.com';
$clientSecret='FNYWnc5dp50dVCTE_07wM26E';
$redirectUrl='http://localhost/project2/login.php';

$client=new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->addScope('profile');
$client->addScope('email');

if(isset($_GET['code'])){
$token=$client->fetchAccessTokenWithAuthCode($_GET['code']);
$client->setAccessToken($token);

$gauth=new Google_Service_Oauth2($client);
$google_info=$gauth->userinfo->get();
$email=$google_info->email;
$name=$google_info->name;
echo "welcome ".$name."You are registered using email:".$email;
}
else{
	echo "<a href='".$client->createAuthUri()."'>Login with google</a>";
}
?>