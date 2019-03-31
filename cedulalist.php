<?php
	session_start();
	include('set.php');
	
require 'connect.php';
		$sql = "SELECT person.person_id, person.lastname, person.firstname, cedula.ctc_no, cedula.placed_issue, cedula.date_issue
		FROM person 
		JOIN cedula
		ON person.person_id = cedula.person_id";
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

<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Cedula List</p></strong></center>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped" id="cedula_list">
	<thead>
  <tr>
		<th scope="col">Person Name</th>
        <th scope="col">CTC No</th>
        <th scope="col">Placed Issue</th>
        <th scope="col">Date Issue</th>
        <th scope="col">Function</th>
      </center></tr></thead>

 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
				?>
			<tr>
			<td>  <?php echo $information['lastname']." ".$information["firstname"];?></td>
			<td>  <?php echo $information['ctc_no']?></td>
			<td>  <?php echo $information['placed_issue']?></td>
			<td><?php echo date('d M Y',strtotime( $information['date_issue']));?></td>
			

	<td> <a class="btn btn-danger" href="deletecedula.php?id=<?php echo $information['ctc_no']; ?>">Delete</i></a>
	
    <a  class="btn btn-success" href="editcedula.php?edit_id=<?php echo $information['ctc_no']; ?>">Edit</i></a>
		</td>


	</tr>
    	<?php
    		}
      	?>
	
	</tbody>
	  </table>
	 <br><br><center><a href= "addcedula.php"><input class="btn btn-primary" type="button" id="list_btn" value="Add cedula"/></a>
	<a href ="home.php"><input class="btn btn-info"  type="button" id="list_btn" value="Home"/></a></center>
<script>
		$(document).ready( function () {
    $('#cedula_list').DataTable();
} );
	</script>
</body>
</html>