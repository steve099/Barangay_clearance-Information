<?php
include ('connect.php');
$id = $_GET['edit_id'];
$query = "SELECT * FROM kaso WHERE person_id= '$id'";
$result = mysqli_query($con, $query);

if (isset($_POST['update6'])){ 
	$kaso = mysqli_real_escape_string($con, $_POST['kaso']);
	$victim = mysqli_real_escape_string($con, $_POST['victim']);
	$date = mysqli_real_escape_string($con, $_POST['date']);

	$sql = "UPDATE `kaso` SET `kaso` = '$kaso', `victim` = '$victim', `date` = '$date' WHERE `kaso`.`person_id` = '$id'";
	
	if (mysqli_query($con, $sql)) {
		header('location: caselist.php');
	}else {
		 echo "Error: " . $update6 . "<br>" . mysqli_error($con);
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
	Kaso :
	<input type="text" name="kaso" placeholder="kaso" value="<?php echo $row['kaso']; ?>" ><br><br>
	Victim :
	<input type="text" name="victim" placeholder="victim" value="<?php echo $row['victim']; ?>" ><br><br>
	Date :
	<input type="date" name="date" placeholder="date" value="<?php echo $row['date']; ?>" ><br><br>
	
	
			
	<button type="submit" name="update6" class="btn btn-primary">Update</button>
			<?php } } ?>
</form>
</center>
</body>
</html>