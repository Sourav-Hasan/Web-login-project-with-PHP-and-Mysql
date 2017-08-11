<?php
session_start();
require_once('connect.php');
if (isset($_POST) & !empty($_POST)) {
    $username=mysqli_real_escape_string($connection,$_POST['username']);
	$password=($_POST['password']);
	$sql="SELECT * FROM `login` WHERE username='$username' AND password='$password'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if ($count==1) {
		$_SESSION['username']=$username;
		echo "welcome $username";
		header( "Location:profile.php?username=$username");
	}
	else{
		echo "invalid username/password";
	}
}
// if (isset($_SESSION['username'])){
// 	echo "User already logged in";
// 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="men.png">
		
		<form method="POST">
			<div class="form-input">
			<i class="fa fa-user-circle" aria-hidden="true"></i>
				<input type="text" name="username" placeholder="Enter Username">
			</div>
			<div class="form-input">
			<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="password"  placeholder="Enter Password">
			</div>
			<input type="submit" name="submit" value="Login" class="btn-login">
			<a  class="btn-login" href="reg.php">Registration</a>
			
		</form>
		
	</div>

</body>
</html>