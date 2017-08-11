<?php
require_once('connect.php');
$username=$_REQUEST['username'];
$sql= "DELETE * FROM login where username='$username'";
$result=$connection->query($sql);

?>