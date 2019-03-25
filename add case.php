<!DOCTYPE html>
<html>
<title>Barangay System</title>
<body>
<form action ="savecase.php" method ="POST">
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add Case</p></strong><hr>
	<?php 
		include('connect.php');
		$query = "SELECT * FROM brg_officer ";
		$result = mysqli_query($con, $query);

		?>
	<div class="form-group">
      <label for="officer_id">Officer Name:</label>
         <select name= "officer_id">
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
	  
      <div class="form-group">
      <label for="kaso">PersonCase:</label>
      <input type="text" name="kaso" class="form-control" id="kaso" placeholder="case" required>
	  </div><br>
	  <div class="form-group">
      <label for="victim">Victim:</label>
      <input type="text" name="victim" class="form-control" id="victim" placeholder="victim" required>
    </div><br>
       <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" name="date" class="form-control" id="date" placeholder="date" required>
    </div><br>
	
	<form class="Form" method="post">
  <input class = "btn" type ="submit" name="save_btn" value="Save"/>
  <a href ="caselist.php"><input class="btn" type="button" id="list_btn" value="List"/></a>
  <a href ="home.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>
 
</center>
</form> 



</body>
</html>