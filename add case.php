<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<title>Barangay System</title>
<body>
<form action ="savecase.php" method ="POST">
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add Case</p></strong><hr>
	<?php 
		include('connect.php');
		$query = "SELECT * FROM brg_officer ";
		$result = mysqli_query($con, $query);

		?>
		<div class="form-row">
		<div class="col-md-6">
      <label for="officer_id">Officer Name:</label>
         <select name= "officer_id"  class="form-control" >
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
         <select name= "person_id"  class="form-control" >
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
      <label for="kaso">PersonCase:</label>
      <textarea rows="4" cols="50" name="kaso" class="form-control" id="kaso" placeholder="case" required></textarea>
	  </div><br>
	  
	  <div class="col-md-6">
      <label for="victim">Victim:</label>
      <input type="text" name="victim" class="form-control" id="victim" placeholder="victim" required>
    </div></div><br>
       <div class="col-md-6">
      <label for="date">Date:</label>
      <input type="date" name="date" class="form-control" id="date" placeholder="date" required>
    </div><br>
	<div class="form-row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	Status :
	<select name ="status" class="form-control" required>
		<option value="">Select</option>
  		<option value="Pending">Pending</option>
  		<option value="Ongoing">On going</option>
		<option value="solve">Solve</option>
	</select><br><div class="col-md-4"></div></div></div>
	
	<form class="Form" method="post">
  <input  class="btn btn-primary" type ="submit" name="save_btn" value="Save"/>
  <a href ="caselist.php"><input class="btn btn-info" type="button" id="list_btn" value="List"/></a>
  <a href ="home.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a>
  	<div class="col-md-4"></div></div>
 
</center>
</form> 



</body>
</html>