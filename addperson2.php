<?php 
include('connect.php');
	$query = "SELECT * FROM brg_officer ";
	$result = mysqli_query($con, $query);

 ?>
<DOCTYPE html>
<html>
<head></head>
<body>
<center>
<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Add Person</p></strong><hr>
<form action="saveperson.php" method="POST">
	<div class="form-group">
      <label for="id">Officer ID:</label>
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
	
	Person ID :
	<input type="number" name="person_id" placeholder="person id" required><br><br>
	Last name :
	<input type="text" name="lastname" placeholder="last name" required><br><br>
	First name :
	<input type="text" name="firstname" placeholder="first name" required><br><br>
	Middle Name :
	<input type="text" name="middlename" placeholder="middle name" required><br><br>
	Birth Place : 
	<input type="text" name="birthplace" placeholder="birth place" required><br><br>
	Birth Date :
	<input type="date" name="birthdate" placeholder="birth date" required><br><br>
	Gender :
	<select name ="sex"  required>
		<option value="">Select</option>
  		<option value="Male">Male</option>
  		<option value="Female">Female</option>
	</select><br><br>
	Civil Status :
	<input type="text" name="civilstatus" placeholder="civil status" required><br><br>
	Citizenship :
	<input type="text" name="citizenship" placeholder="citizenship" required><br><br>
	Occupation :
	<input type="text" name="occupation" placeholder="occupation" required><br><br>

	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<a href ="personlist2.php"><input class="btn" type="button" id="list_btn" value="List"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>



</form>
</center>
</body>
</html>