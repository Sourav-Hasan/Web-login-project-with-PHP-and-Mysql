<?php
require_once('connect.php');
$username=$_REQUEST['username'];
$sql= "SELECT * FROM login where username='$username'";
$result=$connection->query($sql);
    $row = $result->fetch_assoc();
    $id = $row["id"];
    $username = $row["username"];
    $email = $row["email"];
    $gender = $row["gender"];
    $blood_group = $row["blood_group"];
    $age = $row["age"];
    $bio = $row["bio"];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	    body {
		    margin: 0;
		    padding: 0;
		    text-align: center;
}

.centered {
    margin: 0 auto;
    text-align: left;
    width: 800px;
}
		table.GeneratedTable {
		  width: 30%;
		  background-color: #ffffff;
		  border-collapse: collapse;
		  border-width: 2px;
		  border-color: #4fb0b0;
		  border-style: solid;
		  color: #000000;
		}

		table.GeneratedTable td, table.GeneratedTable th {
		  border-width: 2px;
		  border-color: #4fb0b0;
		  border-style: solid;
		  padding: 3px;
		}

		table.GeneratedTable thead {
		  background-color: #6d927d;
		}
    </style>
</head>
<body>
    <b><?php echo $id; ?></b>
    <b><?php echo $username; ?></b>
    <b><?php echo $email; ?></b>
    <b><?php echo $gender; ?></b>
    <b><?php echo $blood_group; ?></b>
    <b><?php echo $age; ?></b>
    <b><?php echo $bio; ?></b>
    <div class="centered">
<table class="GeneratedTable">
  <tbody>
    <tr>
      <td>Id</td>
      <td><?php echo $id; ?></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><?php echo $username; ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php echo $gender; ?></td>
    </tr>
    <tr>
      <td>Blood Group</td>
      <td><?php echo $blood_group; ?></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><?php echo $age; ?></td>
    </tr>
    <tr>
      <td>Bio</td>
      <td><?php echo $bio; ?></td>
    </tr>
  </tbody>
</table>
</div>
<a href="logout.php"><input type="button" value="Logout"></a>

</body>
</html>