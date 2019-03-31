<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="check_login.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Username</label><br>
  		<input type="text" name="username" >
  	</div><br>
  	<div class="input-group">
  		<label>Password</label><br>
  		<input type="password" name="password">
  	</div><br>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		<!--Not yet a member? <a href="registration.php">Sign up</a> -->.
  	</p>
  </form>
  </center>
</body>
</html>