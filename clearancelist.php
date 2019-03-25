<?php
session_start();
require 'connect.php';
	$sql = "SELECT brg_officer.officer_id, brg_officer.lastname AS lname, brg_officer.firstname AS fname, person.person_id, person.lastname, person.firstname,clearance.clearance_id,clearance.purpose,clearance.ctc_no,clearance.or_no,clearance.date_issue
	FROM brg_officer 
	JOIN clearance 
	ON brg_officer.officer_id = clearance.officer_id 
	JOIN person ON person.person_id = clearance.person_id";
	$records=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<title>Barangay System</title>

<body>

<center><h2> List of clearance</h2>
<table class="table table-bordered table-hover table-striped">
<table style="width:70%">
  <tr>
        <th scope="col">|Clearance ID</th>
		<th scope="col">|Officer name</th>
        <th scope="col">|Person name</th>
		<th scope="col">|Purpose</th>
        <th scope="col">|CTC No</th>		
		<th scope="col">|OR No</th>		
		<th scope="col">|Date Issue</th>
		<th scope="col">|Function</th>
      </center></tr>

 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>
				
			<tr>
			<td>|	<?php echo $information['clearance_id']?></td>
		<td> | <?php echo $information['fname']." ".$information["lname"];?></td>
			<td> | <?php echo $information['firstname']." ".$information["lastname"];?></td>
			<td>|	<?php echo $information['purpose']?></td>
			<td>|	<?php echo $information['ctc_no']?></td>
			<td>|	<?php echo $information['or_no']?></td>
			<td>|	<?php echo $information['date_issue']?></td>

	<td> | <a href="deleteclearance.php?id=<?php echo $information['clearance_id']; ?>">Delete</i></a>
		</td>
	<td> | 
    <a href="editclearance.php?edit_id=<?ppersonhp echo $information['clearance_id']; ?>">Edit</i></a>
		</td>


	</tr>
    	<?php
    		}
      	?>
	
	</tbody>
	  </table>
	 <br><br><br><br><a href= "addclearance.php"><input class="btn" type="button" id="list_btn" value="Add clearance"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Home"/></a>

</body>
</html>