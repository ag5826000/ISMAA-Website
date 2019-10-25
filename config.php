<?php 
session_start();
require_once ("GoogleAPI/vendor/autoload.php");
$gClient=new Google_Client();
$gClient->setClientId("58875521726-glh8tqt93m6p3ppocb480teh54qqif54.apps.googleusercontent.com");
$gClient->setClientSecret("X9LPoWP9A1Wm0NQFgVZYGdZl");
$gClient->setApplicationName("ISMAA");
$gClient->setRedirectUri("https://localhost/ismaa/callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
 ?>