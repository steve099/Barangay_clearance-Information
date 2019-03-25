<?php
include ('connect.php');
$id = $_GET['edit_id'];
$query = "SELECT * FROM cedula WHERE ctc_no= '$id'";
$result = mysqli_query($con, $query);

if (isset($_POST['update5'])){ 
	$ctc_no = mysqli_real_escape_string($con, $_POST['ctc_no']);
	$placed_issue = mysqli_real_escape_string($con, $_POST['placed_issue']);
	$date_issue = mysqli_real_escape_string($con, $_POST['date_issue']);

	$sql = "UPDATE `cedula` SET `ctc_no` = '$ctc_no', `placed_issue` = '$placed_issue', `date_issue` = '$date_issue' WHERE `cedula`.`ctc_no` = '$ctc_no';";
	
	if (mysqli_query($con, $sql)) {
		header('location: cedulalist.php');
	}else {
		 echo "Error: " . $update5 . "<br>" . mysqli_error($con);
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
	CTC_no :
	<input type="number" name="ctc_no" placeholder="ctc_no" value="<?php echo $row['ctc_no']; ?>" ><br><br>
	Place Issue :
	<input type="text" name="placed_issue" placeholder="placed_issue" value="<?php echo $row['placed_issue']; ?>" ><br><br>
	Date Issue :
	<input type="date" name="date_issue" placeholder="date_issue" value="<?php echo $row['date_issue']; ?>" ><br><br>
	
	
			
	<button type="submit" name="update5" class="btn btn-primary">Update</button>
			<?php } } ?>
</form>
</center>
</body>
</html>