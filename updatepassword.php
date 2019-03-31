<?php 

session_start();
include('set.php'); 

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="">
<center>
  <div class="header">
  	<h1>Update</h1>
  </div><br>
	 
  <form method="post" action="changepass.php">
		<div class="form-row w-25 pl-3 pr-3 bg-danger" style="border:1px solid black;border-radius:20px;">
		<div class="col-md-12">
		<br>
  		<h4><label class="text-light">Current Password</label><br></h4>
  		<input  type="password" class="form-control" placeholder="Enter Current Password" name="password1" >
		<br>
  		<h4><label class="text-light">New Password</label><br><h4>
  		<input type="password"  class="form-control" placeholder="Enter New Password" name="password2">
		<br>
		<h4><label class="text-light">Confirm Password</label><br><h4>
  		<input type="password"  class="form-control" placeholder="Confirm Password" name="password3"><br>
  		<button type="submit" class="btn btn-success" name="confirm">Submit</button>
		<a href="home.php" class="btn btn-info" >Cancel</a>
  	</div>
  	<p>
  		<!--Not yet a member? <a href="registration.php">Sign up</a> -->.
  	</p></div>
  </form>
  </center>
</body>
</html>