<?php
include ('connect.php');
$id = $_GET['edit_id'];
$query = "SELECT * FROM household WHERE person_id= '$id'";
$result = mysqli_query($con, $query);

if (isset($_POST['update2'])){ 
	$id = $_GET['edit_id'];
	$officer_id = mysqli_real_escape_string($con, $_POST['officer_id']);
	$person_id = mysqli_real_escape_string($con, $_POST['person_id']);
	$brg_workers = mysqli_real_escape_string($con, $_POST['brg_workers']);
	$household_no = mysqli_real_escape_string($con, $_POST['household_no']);
	$barangay = mysqli_real_escape_string($con, $_POST['barangay']);
	$province = mysqli_real_escape_string($con, $_POST['province']);
	

	$sql = "UPDATE `household` SET `brg_workers` = '$brg_workers', `household_no` = '$household_no', `barangay` = '$barangay',`province` = '$province' WHERE `household`.`person_id` ='$id'";
	
	if (mysqli_query($con, $sql)) {
		header('location: householdlist.php');
	}else {
		 echo "Error: " . $update2 . "<br>" . mysqli_error($con);
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
	Barangay workers :
	<input type="text" name="brg_workers" placeholder="barangay workers" class="form-control" value="<?php echo $row['brg_workers']; ?>" ><br></div>
	<div class="col-md-4">
	House hold No:
	<input type="text" name="household_no" placeholder="household no" class="form-control" value="<?php echo $row['household_no']; ?>"><br></div>
	<div class="col-md-4">
	barangay :
	<input type="text" name="barangay" placeholder="barangay" class="form-control" value="<?php echo $row['barangay']; ?>"><br></div></div>
	<div class="form-row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	province : 
	<input type="text" name="province" placeholder="province" class="form-control" value="<?php echo $row['province']; ?>" ><br><br>
	
			
	<button type="submit" name="update2" class="btn btn-primary">Update</button>
	<a href ="householdlist.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>
	<div class="col-md-4"></div></div></div>
			<?php } } ?>
</form>
</center>
</body>
</html>