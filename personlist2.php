<?php
session_start();
include('set.php');
include('set.php');
require 'connect.php';
	$sql = "SELECT brg_officer.officer_id, brg_officer.lastname AS lname, brg_officer.firstname AS fname,brg_officer.position ,person.person_id, person.lastname, person.firstname, person.middlename,person.birthplace,person.birthdate,person.sex,person.civilstatus,person.citizenship,person.occupation,person.barangayname,person.purok 
	FROM brg_officer 
	JOIN person 
	ON brg_officer.officer_id = person.officer_id";
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


<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Person List</p></strong></center>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped" id="person_list">
	<thead>
		<tr>
		<th>OfficerName</th>
        <th>FullName</th>
        <th>BirthPlace</th>		
		<th>BirthDate</th>		
		<th>Sex</th>
		<th>CivilStatus</th>
		<th>Citizenship</th>
		<th>Occupation</th>
		<th>Barangay</th>
		<th>Purok</th>
		<th>Function</th>
      </tr>
	</thead>
	<tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      		?>
			<tr>
			<td><?php echo $information["fname"]." ".$information["lname"]." | ".$information["position"];?></td>
			<td><?php echo $information['firstname']." ".$information["middlename"]." ".$information["lastname"];?></td>
			<td><?php echo $information['birthplace']?></td>
			<td><?php echo date('d M Y',strtotime( $information['birthdate']));?></td>
			<td><?php echo $information['sex']?></td>
			<td><?php echo $information['civilstatus']?></td>
			<td><?php echo $information['citizenship']?></td>
			<td><?php echo $information['occupation']?></td>
			<td><?php echo $information['barangayname']?></td>
			<td><?php echo $information['purok']?></td>
			<td><a class="btn btn-danger btn-sm" href="deleteperson.php?id=<?php echo $information['person_id']; ?>">Delete</i></a><br>
			<a class="btn btn-success btn-sm" href="editperson.php?edit_id=<?php echo $information['person_id']; ?>">Edit</i></a></td>
			</tr>
		<?php } ?>
		</tbody>
	  </table>
	  </div>
	 
	<div align="center"><a href= "addperson2.php"><input class="btn btn-primary" type="button" id="list_btn" value="Add person"/></a>
	<a href ="home.php"><input class="btn btn-info" type="button" id="list_btn" value="Home"/></a>
	<a href ="list.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a></div> </center>
	<script>
		$(document).ready( function () {
    $('#person_list').DataTable();
} );
	</script>
</body>
</html>