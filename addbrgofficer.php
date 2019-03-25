<!DOCTYPE html>
<html>
<head></head>
<body>
<center>
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add Brg_Officer</p></strong><hr>
<form action="saveofficer.php" method="POST">
	<br><br>
	Officer ID :
	<input type="number" name="officer_id" placeholder="officer id" required><br><br>
	Last name :
	<input type="text" name="lastname" placeholder="lastname" required><br><br>
	First name :
	<input type="text" name="firstname" placeholder="first name" required><br><br>
	Middle name :
	<input type="text" name="middlename" placeholder="middle name" required><br><br>
	Position : 
	<input type="text" name="position" placeholder="Position" required><br><br>

	<button type="submit" name="update" class="btn btn-primary">Submit</button>
	<a href ="brgofficerlist.php"><input class="btn" type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>




</form>
</center>
</body>
</html>