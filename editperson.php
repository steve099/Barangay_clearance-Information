<?php
session_start();
include('set.php');
include ('connect.php');
$id = $_GET['edit_id'];
$query = "SELECT * FROM person WHERE person_id = '$id'";
$result = mysqli_query($con, $query);

if (isset($_POST['update4'])){ 
	$id = $_GET['edit_id'];
	$person_id = mysqli_real_escape_string($con, $_POST['person_id']);
	$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
	$middlename = mysqli_real_escape_string($con, $_POST['middlename']);
	$birthplace = mysqli_real_escape_string($con, $_POST['birthplace']);
	$birthdate = mysqli_real_escape_string($con, $_POST['birthdate']);
	$sex = mysqli_real_escape_string($con, $_POST['sex']);
	$civilstatus = mysqli_real_escape_string($con, $_POST['civilstatus']);
	$citizenship = mysqli_real_escape_string($con, $_POST['citizenship']);
	$occupation = mysqli_real_escape_string($con, $_POST['occupation']);

	$sql = "UPDATE `person` SET `person_id` = '$person_id', `lastname` = '$lastname', `firstname` = '$firstname', `middlename` = '$middlename', `birthplace` = '$birthplace', `birthdate` = '$birthdate', `sex` = '$sex', `civilstatus` = '$civilstatus', `citizenship` = '$citizenship', `occupation` = '$occupation' WHERE `person_id` =".$id;
	
	if (mysqli_query($con, $sql)) {
		header('location: personlist2.php');
	}else {
		 echo "Error: " . $update4 . "<br>" . mysqli_error($con);
	}

}
			


?>
<DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<center>
<form action="" method="POST">
	<br><br>
	<?php 
			if(mysqli_num_rows($result)) {
				while($row = mysqli_fetch_array($result)) {
		?>
	<div class="form-row">
	<div class="col-md-4">
	Person ID :
	<input type="number" name="person_id" placeholder="person id" class="form-control" value="<?php echo $row['person_id']; ?>" ><br></div>
	<div class="col-md-4">
	Last name :
	<input type="text" name="lastname" placeholder="lastname" class="form-control" value="<?php echo $row['lastname']; ?>" ><br></div>
	<div class="col-md-4">
	First name :
	<input type="text" name="firstname" placeholder="first name" class="form-control" value="<?php echo $row['firstname']; ?>"><br></div></div>
	<div class="form-row">
	<div class="col-md-4">
	Middle name :
	<input type="text" name="middlename" placeholder="middle name" class="form-control" value="<?php echo $row['middlename']; ?>"><br></div>
	<div class="col-md-4">
	Birth place : 
	<input type="text" name="birthplace" placeholder="Birthplace" class="form-control" value="<?php echo $row['birthplace']; ?>" ><br></div>
	<div class="col-md-4">
	Birth date : 
	<input type="date" name="birthdate" placeholder="Birthdate" class="form-control" value="<?php echo $row['birthdate']; ?>" ><br></div></div>
	<div class="form-row">
	<div class="col-md-4">
	Gender :
	<select name ="sex" class="form-control" required>
		<option value="<?php echo $row['sex']; ?>"><?php echo $row['sex']; ?></option>
  		<option value="Male">Male</option>
  		<option value="Female">Female</option>
	</select><br></div>
	<div class="col-md-4">
	Civil Status :
	<select name ="civilstatus" class="form-control" required>
	<option value="<?php echo $row['civilstatus']; ?>"><?php echo $row['civilstatus']; ?></option>
  		<option value="Single">Single</option>
  		<option value="Married">Married</option>
		<option value="Widow">Widow</option>
	</select><br></div>
	<div class="col-md-4">
	Citizenship : 
	<input type="text" name="citizenship" placeholder="Citizenship" class="form-control" value="<?php echo $row['citizenship']; ?>" ><br></div></div>
	<div class="form-row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	Occupation : 
	<input type="text" name="occupation" placeholder="Occupation" class="form-control" value="<?php echo $row['occupation']; ?>" ><br><br>		
	<button type="submit" name="update4" class="btn btn-primary">Update</button>
	<a href ="personlist2.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>
	<div class="col-md-4"></div></div></div>
			<?php } } ?>
</form>
</center>
</body>
</html>