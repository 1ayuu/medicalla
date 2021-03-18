<?php

session_start();
if ($_POST['username'] == 'user' && $_POST['password'] == 'user') {
	$_SESSION['user'] = $_POST['username'];
	  $_SESSION['message']="You are now logged in.";
	header("location: doctor_homepage.php");
} else {
	

  
    $_SESSION["error"] = $error;
 
  header("location: firstpage.php");
}