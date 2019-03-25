<?php
include ('connect.php');
$id = $_GET['edit_id'];
$query = "SELECT * FROM brg_officer WHERE officer_id= '$id'";
$result = mysqli_query($con, $query);

if (isset($_POST['update'])){ 
	$id = $_GET['edit_id'];
	$officer_id = mysqli_real_escape_string($con, $_POST['officer_id']);
	$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
	$middlename = mysqli_real_escape_string($con, $_POST['middlename']);
	$position = mysqli_real_escape_string($con, $_POST['position']);

	$sql = "UPDATE `brg_officer` SET  `officer_id`='$officer_id', `lastname`='$lastname', `firstname`='$firstname', `middlename`='$middlename', `position`='$position' WHERE `officer_id`='$id'";
	
	if (mysqli_query($con, $sql)) {
		header('location: brgofficerlist.php');
	}else {
		 echo "Error: " . $update . "<br>" . mysqli_error($con);
	}

}
			


?>
<DOCTYPE html>
<html>
<body>
<center>
<form action="" method="POST">
	<br><br>
	<?php 
			if(mysqli_num_rows($result)) {
				while($row = mysqli_fetch_array($result)) {
		?>
	Officer ID :
	<input type="number" name="officer_id" placeholder="officer id" value="<?php echo $row['officer_id']; ?>" ><br><br>
	Last name :
	<input type="text" name="lastname" placeholder="lastname" value="<?php echo $row['lastname']; ?>" ><br><br>
	First name :
	<input type="text" name="firstname" placeholder="first name" value="<?php echo $row['firstname']; ?>"><br><br>
	Middle name :
	<input type="text" name="middlename" placeholder="middle name"  value="<?php echo $row['middlename']; ?>"><br><br>
	Position : 
	<input type="text" name="position" placeholder="Position" value="<?php echo $row['position']; ?>" ><br><br>
	
			
	<button type="submit" name="update" class="btn btn-primary">Update</button>
	<a href ="brgofficerlist.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>
			<?php } } ?>
</form>
</center>
</body>
</html>