<?php 
include('connect.php');
	$query = "SELECT * FROM brg_officer ";
	$result = mysqli_query($con, $query);

 ?>
<!DOCTYPE html>
<html>
<title>Barangay System</title>
<body>
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add barangay</p></strong><hr>
<form action ="savebarangay.php" method = "POST">
	<div class="form-group">
      <label for="officer_id">Officer ID:</label>
      <select name= "officer_id">
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
    </div><br>
	<div class="form-group">
      <label for="address">Barangay:</label>
      <input type="text" name="address" class="form-control"  placeholder="addres " required>
    </div><br>	
  
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<a href ="barangaylist.php"><input class="btn" type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>

 
</center>
</form> 


</body>
</html>