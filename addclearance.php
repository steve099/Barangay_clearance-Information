<DOCTYPE html>
<html>
<head></head>
<body>
<center>
<form action="saveclearance.php" method="POST">
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add clearance</p></strong><hr>
	<br><br>
		<?php 
	include('connect.php');
			$query = "SELECT * FROM cedula ";
			$result = mysqli_query($con, $query);

	?>
	<div class="form-group">
      <label for="ctc_no">CTC no:</label>
      <select name= "ctc_no">
	  <?php
	  if (mysqli_num_rows($result)){
		  while($row = mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $row['ctc_no']; ?>"> <?php echo $row['ctc_no']; ?></option>
		<?php
		  }
	  }
	  ?>
	  </select>
    </div><br>
	Clearance ID :
	<input type="number" name="clearance_id" placeholder="clearance id" required><br><br>
	<?php 
		include('connect.php');
		$query = "SELECT * FROM brg_officer ";
		$result = mysqli_query($con, $query);

	?>
	<div class="form-group">
      <label for="id">Officer name:</label>
      <select name= "officer_id">
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
	<?php 
	include('connect.php');
			$query = "SELECT * FROM person ";
			$result = mysqli_query($con, $query);

	?>
	<div class="form-group">
      <label for="person_id">Person Name:</label>
      <select name= "person_id">
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
	Purpose :
	<input type="text" name="purpose" placeholder="purpose" required><br><br>
	OR No :
	<input type="number" name="or_no" placeholder="OR no" required><br><br>
	Date Issue :
	<input type="date" name="date_issue" placeholder="Date Issue" required><br><br>

	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<a href ="clearancelist.php"><input class="btn" type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>




</form>
</center>
</body>
</html>