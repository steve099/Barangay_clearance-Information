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
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="login.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label><br>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
    </div><br>
    <div class="input-group">
      <label>email :</label><br>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div><br>
  	<div class="input-group">
  	  <label>Password</label><br>
  	  <input type="password" name="password_1">
  	</div><br>
  	<div class="input-group">
  	  <label>Confirm password</label><br>
  	  <input type="password" name="password_2">
  	</div><br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="index.php">Sign in</a>
  	</p>
    </center>
  </form>
</body>
</html>