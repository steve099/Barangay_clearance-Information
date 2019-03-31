<?php
session_start();
include('set.php');
	
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

<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Clearance List</p></strong></center>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped" id="clearance_list">
	<thead>
  <tr>
        <th scope="col">Clearance ID</th>
		<th scope="col">Officer name</th>
        <th scope="col">Person name</th>
		<th scope="col">Purpose</th>
        <th scope="col">CTC No</th>		
		<th scope="col">OR No</th>		
		<th scope="col">Date Issue</th>
		<th scope="col">Function</th>
      </center></tr></thead>

 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      		?>
				
			<tr>
			<td><?php echo $information['clearance_id']?></td>
			<td> <?php echo $information['fname']." ".$information["lname"];?></td>
			<td><?php echo $information['firstname']." ".$information["lastname"];?></td>
			<td><?php echo $information['purpose']?></td>
			<td><?php echo $information['ctc_no']?></td>
			<td><?php echo $information['or_no']?></td>
			<td><?php echo date('d M Y',strtotime( $information['date_issue']));?></td>

	<td> <a class="btn btn-danger"  href="deleteclearance.php?id=<?php echo $information['clearance_id']; ?>">Delete</i></a>
	
    <a  class="btn btn-success" href="editclearance.php?edit_id=<?php echo $information['clearance_id']; ?>">Edit</i></a>
		</td>


		</tr>
    	<?php
    		}
      	?>
	
	</tbody>
</table>
	 <br><br><center><a href= "addclearance.php"><input class="btn btn-primary" type="button" id="list_btn" value="Add clearance"/></a>
	<a href ="home.php"><input  class="btn btn-info" type="button" id="list_btn" value="Home"/></a></center>
<script>
		$(document).ready( function () {
    $('#clearance_list').DataTable();
} );
	</script>

</body>
</html>