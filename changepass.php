<?php 
	include('connect.php');
	session_start();
	if(isset($_POST['confirm'])){
		$pass1 = mysqli_real_escape_string($con, md5($_POST['password1']));
		$pass2 = mysqli_real_escape_string($con, md5($_POST['password2']));
		$pass3 = mysqli_real_escape_string($con, md5($_POST['password3']));
		$user = $_SESSION['username'];
		$select = "SELECT * FROM users WHERE username='$user' AND password='$pass1'";
		$result = mysqli_query($con, $select);
		
		if(mysqli_num_rows($result) == 1){
			if ($pass2==$pass3){
				$sql= "Update users set password = '$pass3' WHERE username='$user'";
				mysqli_query($con, $sql);
				echo "<script> alert('Successfully Update!'); window.location.href='login.php';</script>";
			}else{
			echo "<script> alert('password did not match!'); window.location.href='updatepassword.php';</script>";
		}
		}else{
			echo "<script> alert('Wrong password!'); window.location.href='updatepassword.php';</script>";
		}
	}