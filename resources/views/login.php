<?php
session_start();
//include("includes/header.php");
include("includes/connections.php");
include("includes/functions.php");
//chkLogin();

$errors = [];
if(array_key_exists('login',$_POST)){
     if(!empty($_POST['matric_no'])){
     	$m =$_POST['matric_no'];
     }else{
     	$errors['matric_no'] = "please enter your matric number";
     }

     if(!empty($_POST['password'])){
     	$pw = $_POST['password'];
     }else{
     	$errors['password'] = "please enter your password";
     }

     if(empty($errors)){
    
      doStudentLogin($conn,$m,$pw);

     }
     else{
          	 var_dump($errors);

    }

   }


?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body id="login">

<!-- BACKGROUND IMAGE AND OVERLAY -->
	<div class="background">
		<div class="overlay"></div>
		<div class="img"></div>
	</div>

<!-- TOP BAR WITH LOGO AND TEXT -->
	<div class="top-bar">
		<div class="logo"></div>
		<h1>Babcock University Pass Booking</h1>
	</div>

<!-- LOGIN FORM -->
	<form class="def-form login-form clearfix" action=" "  method ="POST">
		<label for="login-form" class="header">Sign In</label>
		<input type="text" name="matric_no" placeholder="Matric No." class="text-field">
		<input type="password" name="password" placeholder="Password" class="text-field">
		<input type="submit" name="login" value="Login" class="text-field">
	</form>

<?php

include("includes/footer.php");
?>

