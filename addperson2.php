<?php 
include('connect.php');
	$query = "SELECT * FROM brg_officer ";
	$result = mysqli_query($con, $query);

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
<center><strong><p align="center" style="font-size: 40px; margin-top: 8px;">Add Person</p></strong><hr>
<form action="saveperson.php" method="POST">
	<div class="form-row">
	<div class="col-md-6">
      <label for="id">Officer ID:</label>
      <select name= "officer_id" class="form-control">
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
    </div>
	
	<div class="col-md-6">
	Person ID :
	<input type="number" name="person_id" placeholder="person id" class="form-control"required><br> </div></div>
	<div class="form-row">
	<div class="col-md-4">
	Last name :
	<input type="text" name="lastname" placeholder="last name" class="form-control"required><br></div>
	<div class="col-md-4">
	First name :
	<input type="text" name="firstname" placeholder="first name" class="form-control"required><br></div>
	<div class="col-md-4">
	Middle Name :
	<input type="text" name="middlename" placeholder="middle name" class="form-control"required><br></div></div>
	<div class="form-row">
	<div class="col-md-4">
	Birth Place : 
	<input type="text" name="birthplace" placeholder="birth place" class="form-control"required><br></div>
	<div class="col-md-4">
	Birth Date :
	<input type="date" name="birthdate" placeholder="birth date" class="form-control"required><br></div>
	<div class="col-md-4">
	Gender :
	<select name ="sex" class="form-control" required>
		<option value="">Select</option>
  		<option value="Male">Male</option>
  		<option value="Female">Female</option>
	</select><br></div></div>
	<div class="form-row">
	<div class="col-md-4">
	Civil Status :
	<input type="text" name="civilstatus" placeholder="civil status" class="form-control"required><br></div>
	<div class="col-md-4">
	Citizenship :
	<input type="text" name="citizenship" placeholder="citizenship" class="form-control"required><br></div>
	<div class="col-md-4">
	Occupation :
	<input type="text" name="occupation" placeholder="occupation" class="form-control"required></div></div><br><br>
	<div class="form-row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<a href ="personlist2.php"><input class="btn btn-info" type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a></div>
	<div class="col-md-4"></div>



</form>
</center>
</body>
</html>