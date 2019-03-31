<?php 
session_start();
include('set.php');
include('connect.php');
	$query = "SELECT * FROM brg_officer ";
	$result = mysqli_query($con, $query);

 ?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<title>Barangay System</title>
</head>
<body>
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add purok</p></strong><hr>
<form action ="savepurok.php" method="POST">

		<div class="form-row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
      <label for="officer_id">Officer ID:</label>
      <select name="officer_id" class="form-control">
	  <?php
	  if (mysqli_num_rows($result)){
		  while($row = mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $row['officer_id']; ?>"> <?php echo $row['firstname']; ?></option>
		<?php
		  }
	  }
	  ?>
	  </select>
    <br>
	
      <label for="purok">Purok:</label>
      <input type="text" name="purok" class="form-control"  placeholder="purok" required>
    <br>	<div class="col-md-4"></div></div></div>	
  
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<a href ="puroklist.php"><input class="btn btn-info" type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a>

 
</center>
</form> 


</body>
</html>