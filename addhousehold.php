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
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add House No</p></strong><hr>
<form action ="savehousehold.php" method = "POST">
	<div class="form-row">
	<div class="col-md-6">
      <label for="id">Officer Name:</label>
      <select name= "officer_id" class= "form-control">
	  <?php	
	  if (mysqli_num_rows($result)){
		  while($row = mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $row['officer_id']; ?>"> <?php echo $row['firstname']." ".$row["lastname"]."|".$row["position"]; ?></option>
		<?php
		  }
	  }
	  ?>
	  </select>
    </div><br>
	
	<?php 
	include('connect.php');
			$query = "SELECT * FROM person ";
			$result = mysqli_query($con, $query);

	?>
	<div class="col-md-6">
      <label for="person_id">Person Name:</label>
      <select name= "person_id" class="form-control">
	  <?php
	  if (mysqli_num_rows($result)){
		  while($row = mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $row['person_id']; ?>"> <?php echo $row['firstname']." ".$row["lastname"]; ?></option>
		<?php
		  }
	  }
	  ?>
	  </select>
    </div></div><br>
	<div class="form-row">
	<div class="col-md-6">
      <label for="brg_workers">Brg Worker:</label>
      <input type="text" name="brg_workers" class="form-control"  placeholder="worker" required>
    </div><br>
			
     <div class="col-md-6">
      <label for="household_no">House No:</label>
      <input type="text" name="household_no" class="form-control"  placeholder="household no" required>
    </div></div><br>
	
		<?php 
	include('connect.php');
			$query = "SELECT * FROM barangay1 ";
			$result = mysqli_query($con, $query);

	?>
	<div class="col-md-6">
      <label for="barangayname">Barangay Name:</label>
      <select name= "barangayname" class="form-control">
	  <?php
	  if (mysqli_num_rows($result)){
		  while($row = mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $row['barangayname']; ?>"> <?php echo $row['barangayname']; ?></option>
		<?php
		  }
	  }
	  ?>
	  </select>
    </div></div><br>
	<?php 
			include('connect.php');
			$query = "SELECT * FROM purok2 ";
			$result = mysqli_query($con, $query);

			?>
	<div class="col-md-4">
      <label for="purok">Purok:</label>
      <select name= "purok" class="form-control">
	  <?php
	  if (mysqli_num_rows($result)){
		  while($row = mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $row['purok']; ?>"> <?php echo $row['purok']; ?></option>
		<?php
		  }
	  }
	  ?>
	  </select>
    </div><br>
	<div class="col-md-4">
     <center> <label for="province">Province:</label>
      <input type="text" name="province" class="form-control"  placeholder="province" required>
    </div></div><br>
  
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<a href ="householdlist.php"><input class="btn btn-info" type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a>

 
</center>
</form> 


</body>
</html>