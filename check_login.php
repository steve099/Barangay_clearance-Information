<?php 
	include('connect.php');
	session_start();
	if(isset($_POST['login_user'])){
		$user = mysqli_real_escape_string($con, $_POST['username']);
		$pass = mysqli_real_escape_string($con, md5($_POST['password']));
		
		$select = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
		$result = mysqli_query($con, $select);
		
		if(mysqli_num_rows($result) == 1){
			$row = mysqli_fetch_array($result);
			$_SESSION['username'] = $user;
			header('location: home.php');
		}else{
			echo "<script> alert('Wrong Username/Password!'); window.location.href='login.php';</script>";
		}
	}