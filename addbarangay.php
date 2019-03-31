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
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add barangay</p></strong><hr>
<form action ="savebarangay.php" method = "POST">
	<div class="form-row">
	<div class="col-md-6">
      <label for="officer_id">Officer ID:</label>
      <select name= "officer_id"  class="form-control">
	  <?php
	  if (mysqli_num_rows($result)){
		  while($row = mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $row['officer_id']; ?>"> <?php echo $row['firstname']." ".$row["lastname"]." | ".$row["position"]; ?></option>
		<?php
		  }
	  }
	  ?>
	  </select>
    </div><br>
	  <div class="col-md-6">
      <label for="addressname">Barangay:</label>
      <input type="text" name="barangayname" class="form-control"  placeholder="barangay" required>
    </div></div><br>
	<div class="form-row">
    <div class="col-md-4"></div>
	 <div class="col-md-4">
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<a href ="barangaylist.php"><input class="btn btn-info"  type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a></div>
	<div class="col-md-4"></div></div>
 
</center>
</form> 


</body>
</html>