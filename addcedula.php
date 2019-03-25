<DOCTYPE html>
<html>
<head></head>
<body>
<center>
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add Cedula</p></strong><hr>
<form action="savecedula.php" method="POST">
	<br><br>
	CTC No :
	<input type="number" name="ctc_no" placeholder="CTC No" required><br><br>
	Place Issue :
	<input type="text" name="placed_issue" placeholder="Placed Issue" required><br><br>
	Date :
	<input type="date" name="date_issue" placeholder="Date Issue" required><br><br>
	
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<a href ="cedulalist.php"><input class="btn" type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>




</form>
</center>
</body>
</html>