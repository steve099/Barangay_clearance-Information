<?php
	session_start();
	include('set.php');
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
<div ="container">
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add clearance</p></strong><hr>
<form action="saveclearance.php" method="POST">

	<br><br>
	
	<div class="form-row">
	<div class="col-md-4">
	Clearance ID:
	<input type="number" name="clearance_id"  class="form-control" placeholder="clearance id" required><br></div>
	
	<div class="col-md-4">
	<?php 
		include('connect.php');
		$query = "SELECT * FROM brg_officer ";
		$result = mysqli_query($con, $query);

	?>
	<label for="id">Officer name:
      <select name= "officer_id"  class="form-control" >
	  <?php	
	  if (mysqli_num_rows($result)){
		  while($row = mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $row['officer_id']; ?>"> <?php echo $row['firstname']." ".$row["lastname"]; ?></option>
		<?php
		  }
	  }
	  ?>
	  </select>
    </div><br>
	<div class="col-md-4">
		<?php 
	include('connect.php');
			$query = "SELECT * FROM cedula, person WHERE cedula.person_id = person.person_id ";
			$result = mysqli_query($con, $query);

	?>

      <label for="ctc_no">CTC no:	
      <select name= "ctc_no" class="form-control" >
	  <?php
	  if (mysqli_num_rows($result)){
		  while($row = mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $row['person_id']; ?>"> <?php echo $row['ctc_no']; ?> (<?php echo $row['lastname'];  ?><?php echo " "  ?><?php echo $row['firstname'];  ?>)</option>
		<?php
		  }
	  }
	  ?>
	  </select>
   </div></div> 
	<div class="form-row">	
	
	<div class="col-md-4">	
	<?php 
	include('connect.php');
			$query = "SELECT * FROM person ";
			$result = mysqli_query($con, $query);

	?>
      <label for="person_id">Person Name:
      <select name= "person_id" class="form-control" >
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
    </div><br>
	<div class="col-md-4">
	Purpose :
	<input type="text" name="purpose"  class="form-control"  placeholder="purpose" required><br></div>
	<div class="col-md-4">
	OR No :
	<input type="number" name="or_no"  class="form-control"  placeholder="OR no" required><br></div>
	<div class="col-md-4"></div></div>
	
	<div class="form-row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	Date Issue :
	<input type="date" name="date_issue"  class="form-control"  placeholder="Date Issue" required><br>
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<a href ="clearancelist.php"><input class="btn" type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>
	<div class="col-md-4"></div></div></div>
	


</form>

</center>
</body>
</html>