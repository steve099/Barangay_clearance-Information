<?php
session_start();
include('set.php');
include('set.php');
require 'connect.php';
	$sql = "SELECT brg_officer.officer_id, brg_officer.lastname AS lname, brg_officer.firstname AS fname,brg_officer.position ,person.person_id, person.lastname, person.firstname,household.brg_workers,household.household_no,household.barangayname,household.purok,household.province 
	FROM brg_officer 
	JOIN household 
	ON brg_officer.officer_id = household.officer_id 
	JOIN person ON person.person_id = household.person_id";
	$records=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/dataTables.bootstrap4.css"/>
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
<title>Barangay System</title>
</head>
<body>

<center><h2>Household List </h2>
<table class="table table-bordered table-hover table-striped" id="household_list">
<thead>
  <tr>
		<th scope="col">Officer name</th>
        <th scope="col">Person name</th>
		<th scope="col">Workers</th>
        <th scope="col">House No</th>
		<th scope="col">Barangay</th>
		<th scope="col">Purok</th>
		<th scope="col">Province</th>
        <th scope="col">Function</th>
		<th scope="col">Action</th>
</tr>
</thead>
 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      			?>
				
			<tr>
			<td><?php echo $information['officer_id']." ".$information['fname']." ".$information["lname"]." ".$information["position"];?></td>
			<td><?php echo $information['lastname']." ".$information["firstname"];?></td>
			<td><?php echo $information['brg_workers']?></td>
			<td><?php echo $information['household_no']?></td>
			<td><?php echo $information['barangayname']?></td>
			<td><?php echo $information['purok']?></td>
			<td><?php echo $information['province']?></td>
			<td><a class="btn btn-danger" href="deletehouseholdlist.php?id=<?php echo $information['person_id']; ?>">Delete</i></a></td>
			<td><a class="btn btn-success" href="edithousehold.php?edit_id=<?php echo $information['person_id']; ?>">Edit</i></a></td>
	</tr>
    	<?php
    		}
      	?>
	</tbody>
	  </table>
	 <br><br><br><br><a href= "addhousehold.php"><input class="btn btn-primary" type="button" id="list_btn" value="Add Household"/></a>
	<a href ="home.php"><input class="btn btn-info" type="button" id="list_btn" value="Home"/></a>
	<a href ="list.php"><input class="btn btn-secondary"type="button" id="list_btn" value="Back"/></a>
	<script>
	$(document).ready( function () {
    $('#household_list').DataTable();
} );
	</script>
</body>
</html>