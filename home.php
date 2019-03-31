<?php 
	session_start();
	include('set.php');
	
	if(isset($_POST['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<title>barangay/clearance Info System</title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
<div class="pill-nav">
<form method="post">
<button type="submit" class="btn btn-danger" name="logout">Logout</button>
</form>
</div>
		<center><h2 style="color:white;">Barangay/Clearance Info System</h2></center>
		<div class="pill-nav">
			<a href ="addbrgofficer.php">Add Officer</a>
		</div>
		<div class="pill-nav">
			<a href ="addbarangay.php">Add Barangay</a>
		</div>
		<div class="pill-nav">
			<a href ="addperson2.php">Add Person</a>
		</div>
		<div class="pill-nav">
			<a href ="addhousehold.php">Add Household</a>
		</div>
		<div class="pill-nav">
			<a href ="addpurok.php">Add Purok</a>
		</div>
		<div class="pill-nav">
			<a href ="add case.php">Add Case</a>
		</div>
		<div class="pill-nav">
			<a href ="addcedula.php">Add Cedula</a>
		</div>
		<div class="pill-nav">
			<a href ="addclearance.php">Add Clearance</a>
		</div>
		<div class="pill-nav">
			<a href ="updatepassword.php">Edit Password</a>
		</div>
  	
 </body>
 </html>

