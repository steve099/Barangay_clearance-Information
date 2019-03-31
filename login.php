<?php include('server.php') ?>
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
  	<h1>Login</h1>
  </div><br>
	 
  <form method="post" action="check_login.php">
  	<?php include('error.php'); ?>
		<div class="form-row w-25 pl-3 pr-3 bg-info" style="border:1px solid black;border-radius:20px;">
		<div class="col-md-12">
		<br>
  		<h3><label class="text-light">Username</label><br></h3>
  		<input  type="text" class="form-control" placeholder="Enter Username" name="username" >
		<br>
  		<h3><label class="text-light">Password</label><br><h3>
  		<input type="password"  class="form-control" placeholder="Enter Password" name="password"><br>
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		<!--Not yet a member? <a href="registration.php">Sign up</a> -->.
  	</p></div>
  </form>
  </center>
</body>
</html>