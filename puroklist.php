<?php
session_start();
include('set.php');
require 'connect.php';
	$sql ="SELECT brg_officer.officer_id, brg_officer.lastname, brg_officer.firstname ,brg_officer.position,purok2.purok
	FROM brg_officer 
	JOIN purok2 
	ON brg_officer.officer_id = purok2.officer_id";
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

<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Purok List</p></strong></center>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped" id="purok_list">
		<thead>
		<tr>
        <th scope="col">Officer ID</th>
        <th scope="col">purok </th>
        <th scope="col">Function</th>
      </center></tr></thead>

 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      			?>
				
			<tr>
			<td> <?php echo $information['officer_id']." ".$information["firstname"]." ".$information["lastname"]?></td>
			<td> <?php echo $information['purok']?></td>
					
			

			<td> <a class="btn btn-danger" href="deletepurok.php?id=<?php echo $information['purok']; ?>">Delete</i></a>
		</td>

	</tr>
    	<?php
    		}
      	?>
	
	</tbody>
	  </table>
	 <br><br><center><a href= "addpurok.php"><input class="btn btn-primary" type="button" id="list_btn" value="Add Purok"/></a>
	<a href ="home.php"><input class="btn btn-info"  type="button" id="list_btn" value="Home"/></a>
	<a href ="list.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a></center>
<script>
		$(document).ready( function () {
    $('#purok_list').DataTable();
} );
	</script>
</body>
</html>