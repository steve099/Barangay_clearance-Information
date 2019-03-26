<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<center>
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add Brg_Officer</p></strong></center>
<form action="saveofficer.php" method="POST">
	<br><br>
	<div class="form-row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	Officer ID :
	<input type="number" name="officer_id" placeholder="officer id" class="form-control" required><br>
	Last name :
	<input type="text" name="lastname" placeholder="lastname" class="form-control" required><br>
	First name :
	<input type="text" name="firstname" placeholder="first name" class="form-control" required><br>
	Middle name :
	<input type="text" name="middlename" placeholder="middle name" class="form-control" required><br>
	Position : 
	<input type="text" name="position" placeholder="Position" class="form-control" required><br><br>

	<button type="submit" name="update" class="btn btn-primary">Submit</button>
	<a href ="brgofficerlist.php"><input class="btn btn-info" type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a>


</div>
</div>
</form>
</center>
</body>
</html>