<?php
$mysql = new mysqli("localhost", "MyUsername", "MyPassword", "MyUsername");

if(mysqli_connect_errno()) {
	die(sprintf("MySQL connection failed: %s\n", mysqli_connect_error()));
}
?>
