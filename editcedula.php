<?php
	session_start();
	include('set.php');
	
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
	CTC_no :
	<input type="number" name="ctc_no" placeholder="ctc_no" class="form-control" value="<?php echo $row['ctc_no']; ?>" ><br>
	Place Issue :
	<input type="text" name="placed_issue" placeholder="placed_issue" class="form-control" value="<?php echo $row['placed_issue']; ?>" ><br>
	Date Issue :
	<input type="date" name="date_issue" placeholder="date_issue" class="form-control" value="<?php echo $row['date_issue']; ?>" ><br>
	<div class="col-md-4"></div></div></div>
	
			
	<button type="submit" name="update5" class="btn btn-primary">Update</button>
	<a href ="cedulalist.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>
			<?php } } ?>
</form>
</center>
</body>
</html>