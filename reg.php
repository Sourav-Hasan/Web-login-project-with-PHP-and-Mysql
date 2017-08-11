<?php
require_once('connect.php');
if (isset($_POST) & !empty($_POST)) {
	$username=mysqli_real_escape_string($connection,$_POST['username']);
	$email=mysqli_real_escape_string($connection,$_POST['email']);
	$password=($_POST['password']);
	$gender='NULL';
	$blood_group='NULL';
    $age ='NULL';
    $bio='NULL';
	$sql="INSERT INTO `login`(username,email,password,gender,blood_group,age,bio) VALUES ('$username','$email','$password','$gender',
	'$blood_group','$age','$bio')";
	$result=mysqli_query($connection,$sql);
	if ($result) {
		echo "Registration successfull";
	}
	else{
		echo "Registration Failed";
	}

}
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
			<i class="fa fa-envelope" aria-hidden="true"></i>
				<input type="email" name="email" placeholder="some@some.com">
			</div>

			<div class="form-input">
			<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="password"  placeholder="Enter Password">
			</div>
			<input type="submit" name="submit" value="Registration" class="btn-login">
			
		</form>
	</div>

</body>
</html>