<?php
ini_set('display_errors',1); error_reporting(E_ALL);
	$con = mysqli_connect("localhost","root","") or die("Unable to connect");
	mysqli_select_db($con,'barangay');
?>
