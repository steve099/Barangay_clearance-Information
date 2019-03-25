<?php
include ('connect.php');
$id = $_GET['edit_id'];
$query = "SELECT * FROM barangay1 WHERE officer_id='$id'";
$result = mysqli_query($con, $query);

if (isset($_POST['update1'])){ 
	$id = $_GET['edit_id'];
	$officer_id = mysqli_real_escape_string($con, $_POST['officer_id']);
	$address = mysqli_real_escape_string($con, $_POST['address']);

	$sql = "UPDATE `barangay1` SET  `officer_id`='$officer_id', `address`='$address' WHERE `officer_id`='$id'";
	
	if (mysqli_query($con, $sql)) {
		header('location: barangaylist.php');
	}else {
		 echo "Error: " . $update1 . "<br>" . mysqli_error($con);
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
	Address :
	<input type="text" name="address" placeholder="address" value="<?php echo $row['address']; ?>" ><br><br>
	
	
			
	<button type="submit" name="update1" class="btn btn-primary">Update</button>
			<?php } } ?>
</form>
</center>
</body>
</html>