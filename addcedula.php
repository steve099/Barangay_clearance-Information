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
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add Cedula</p></strong><hr>
<form action="savecedula.php" method="POST">
	<br><br>
	<div class="form-row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	CTC No :
	<input type="number" name="ctc_no" class="form-control" placeholder="CTC No" required><br>
	Place Issue :
	<input type="text" name="placed_issue" class="form-control" placeholder="Placed Issue" required><br>
	Date :
	<input type="date" name="date_issue" class="form-control" placeholder="Date Issue" required><br>
	<div class="col-md-4"></div></div></div>
	
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<a href ="cedulalist.php"><input class="btn" type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>




</form>
</center>
</body>
</html>