<?php
session_start();
require 'connect.php';
	$sql = "SELECT * FROM brg_officer";
	$records=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<title>Barangay System</title>

<body>

<center><h2> List </h2>
<table class="table table-bordered table-hover table-striped">
<table style="width:65%">
  <tr>
        <th scope="col">|Officer ID</th>
        <th scope="col">|Last name</th>
        <th scope="col">|First name</th>
		<th scope="col">|Middle name</th>
        <th scope="col">|Position</th>		
		<th scope="col">|Function</th>
      </center></tr>

 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>
				
			<tr>
			<td>|	<?php echo $information['officer_id']?></td>
			<td>|	<?php echo $information['lastname']?></td>
			<td>|	<?php echo $information['firstname']?></td>
			<td>|	<?php echo $information['middlename']?></td>
			<td>|	<?php echo $information['position']?></td>

	<td> | <a href="deleteofficer.php?id=<?php echo $information['officer_id']; ?>">Delete</i></a>
		</td>
	<td> | 
    <a href="editofficer.php?edit_id=<?php echo $information['officer_id']; ?>">Edit</i></a>
		</td>


	</tr>
    	<?php
    		}
      	?>
	
	</tbody>
	  </table>
	 <br><br><br><br><a href= "addbrgofficer.php"><input class="btn" type="button" id="list_btn" value="Add Officer"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Home"/></a>
	<a href ="list.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>

</body>
</html>