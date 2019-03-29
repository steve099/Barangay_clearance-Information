<?php
include ('connect.php');
$id = $_GET['edit_id'];
$query = "SELECT * FROM barangay1 WHERE officer_id='$id'";
$result = mysqli_query($con, $query);

if (isset($_POST['update1'])){ 
	$id = $_GET['edit_id'];
	$officer_id = mysqli_real_escape_string($con, $_POST['officer_id']);
	$barangayname = mysqli_real_escape_string($con, $_POST['barangayname']);

	$sql = "UPDATE `barangay1` SET  `officer_id`='$officer_id', `barangayname`='$barangayname' WHERE `officer_id`='$id'";
	
	if (mysqli_query($con, $sql)) {
		header('location: barangaylist.php');
	}else {
		 echo "Error: " . $update1 . "<br>" . mysqli_error($con);
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
	<div class="col-md-6">
	Officer ID :
	<input type="number" name="officer_id" placeholder="officer id" class="form-control" value="<?php echo $row['officer_id']; ?>" ><br></div>
	<div class="col-md-6">
	Barangay :
	<input type="text" name="barangayname" placeholder="barangay" class="form-control" value="<?php echo $row['barangayname']; ?>" ><br><br></div></div>
	
	
	<div class="form-row">
	<div class="col-md-4"></div>
	<div class="col-md-4">	
	<button type="submit" name="update1" class="btn btn-primary">Update</button>
	<a href ="barangaylist.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>
	<div class="col-md-4"></div></div></div>	
			<?php } } ?>
</form>
</center>
</body>
</html>