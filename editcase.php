<?php
include ('connect.php');
$id = $_GET['edit_id'];
$query = "SELECT * FROM kaso WHERE person_id= '$id'";
$result = mysqli_query($con, $query);

if (isset($_POST['update6'])){ 
	$kaso = mysqli_real_escape_string($con, $_POST['kaso']);
	$victim = mysqli_real_escape_string($con, $_POST['victim']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$status = mysqli_real_escape_string($con, $_POST['status']);

	$sql = "UPDATE `kaso` SET `kaso` = '$kaso', `victim` = '$victim', `date` = '$date', `status` = '$status' WHERE `kaso`.`person_id` = '$id'";
	
	if (mysqli_query($con, $sql)) {
		header('location: caselist.php');
	}else {
		 echo "Error: " . $update6 . "<br>" . mysqli_error($con);
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
	<div class="col-md-4"></div>
	<div class="col-md-4">
	Kaso :
	<input type="text" name="kaso" placeholder="kaso" class="form-control" value="<?php echo $row['kaso']; ?>" ><br>
	Victim :
	<input type="text" name="victim" placeholder="victim" class="form-control" value="<?php echo $row['victim']; ?>" ><br>
	Date :
	<input type="date" name="date" placeholder="date" class="form-control" value="<?php echo $row['date']; ?>" ><br>
	Status :
	<select name ="status" class="form-control" required>
		<option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
  		<option value="Peding">Peding</option>
  		<option value="Ongoing">On going</option>
		<option value="solve">Solve</option>
	</select><br>
		
	
			
	<button type="submit" name="update6" class="btn btn-primary">Update</button>
	<div class="col-md-4"></div>
			<?php } } ?>
</form>
</center>
</body>
</html>