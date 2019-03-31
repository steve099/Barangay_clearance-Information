<?php
session_start();
include('set.php');
	
include ('connect.php');
$id = $_GET['edit_id'];
$query = "SELECT * FROM clearance WHERE clearance_id= '$id'";
$result = mysqli_query($con, $query);

if (isset($_POST['update7'])){ 
	$clearance_id = mysqli_real_escape_string($con, $_POST['clearance_id']);
	$purpose = mysqli_real_escape_string($con, $_POST['purpose']);
	$or_no = mysqli_real_escape_string($con, $_POST['or_no']);
	$date_issue = mysqli_real_escape_string($con, $_POST['date_issue']);

	$sql = "UPDATE `clearance` SET `clearance_id` = '$clearance_id', `purpose` = '$purpose', `or_no` = '$or_no', `date_issue` = '$date_issue' WHERE `clearance`.`or_no` = '$or_no'";
	
	if (mysqli_query($con, $sql)) {
		header('location: clearancelist.php');
	}else {
		 echo "Error: " . $update7. "<br>" . mysqli_error($con);
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
	Clearance_id :
	<input type="number" name="clearance_id" placeholder="clearance_id" class="form-control" value="<?php echo $row['clearance_id']; ?>" ><br>
	Purpose :
	<input type="text" name="purpose" placeholder="purpose" class="form-control" value="<?php echo $row['purpose']; ?>" ><br>
	Or no :
	<input type="number" name="or_no" placeholder="or_no" class="form-control" value="<?php echo $row['or_no']; ?>" ><br>
	Date issue :
	<input type="date" name="date_issue" placeholder="date" class="form-control" value="<?php echo $row['date_issue']; ?>" ><br>
	
	<button type="submit" name="update7" class="btn btn-primary">Update</button>
	<a href ="clearancelist.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a>
	<div class="col-md-4"></div>
			<?php } } ?>
</form>
</center>
</body>
</html>