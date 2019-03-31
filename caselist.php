<?php
session_start();
include('set.php');
require 'connect.php';
	$sql = "SELECT brg_officer.officer_id, brg_officer.lastname AS lname, brg_officer.firstname AS fname,brg_officer.position, person.person_id, person.lastname, person.firstname,kaso.kaso,kaso.victim,kaso.date,kaso.status 
	FROM brg_officer 
	JOIN kaso 
	ON brg_officer.officer_id = kaso.officer_id 
	JOIN person ON person.person_id = kaso.person_id";
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

</head>
<title>Barangay System</title>

<body>

<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Case List</p></strong></center>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped" id="case_list">
		<thead>
		<tr>
		<th scope="col">|Officer name</th>
        <th scope="col">|Person name</th>
        <th scope="col">|Kaso</th>
		<th scope="col">|Victim</th>
		<th scope="col">|Date</th>
		<th scope="col">|Status</th>
         <th scope="col">|Function</th>
      </center></tr></thead>

 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      			?>
				
			<tr>
			<td> <?php echo $information['lname']." ".$information["fname"]." | ".$information["position"];?></td>
			<td> <?php echo $information['firstname']." ".$information["lastname"];?></td>
			<td> <?php echo $information['kaso'];?></td>
			<td> <?php echo $information['victim'];?></td>
			<td> <?php echo $information['date'];?></td>
			<td> <?php echo $information['status'];?></td>
			

	<td> <a class="btn btn-danger" href="deletecase.php?id=<?php echo $information['person_id']; ?>">Delete</i></a>
		
	 
    <a class="btn btn-success" href="editcase.php?edit_id=<?php echo $information['person_id']; ?>">Edit</i></a>
		</td>


	</tr>
    	<?php
    		}
      	?>
	
	</tbody>
	  </table>
	 <br><br><center><a href= "add case.php"><input class="btn btn-primary"  type="button" id="list_btn" value="Add Kaso"/></a>
	<a href ="home.php"><input class="btn btn-info" type="button" id="list_btn" value="Home"/></a>
	<a href ="list.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a></center>
<script>
		$(document).ready( function () {
    $('#case_list').DataTable();
} );
	</script>
</body>
</html>