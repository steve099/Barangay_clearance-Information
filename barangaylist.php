<?php
session_start();
include('set.php');
require 'connect.php';
	$sql = "SELECT brg_officer.officer_id, brg_officer.lastname, brg_officer.firstname,brg_officer.position,barangay1.barangayname
	FROM brg_officer 
	JOIN barangay1 
	ON brg_officer.officer_id = barangay1.officer_id";
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
<body>

<center><strong><p align="center" style="font-size: 30px; margin-top: 12px;">Purok List</p></strong></center>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped" id="barangay_list">

<thead>
  <tr>
        <th scope="col">Officer name</th>
        <th scope="col">Barangay </th>
        <th scope="col">Function</th>
      </center></tr>

 </thead>
 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      			?>
				
			<tr>
			<td>  <?php echo $information["firstname"]." ".$information["lastname"]." | ".$information["position"];?></td>
			<td>  <?php echo $information['barangayname']?></td>
					
			

	<td>  <a class="btn btn-danger" href="deletebarangay.php?id=<?php echo $information['id']; ?>">Delete</i></a>
 
    <a class="btn btn-success" href="editbarangay.php?edit_id=<?php echo $information['officer_id']; ?>">Edit</i></a>
		</td>


	
    	<?php
    		}
      	?>
	</tr>
	</tbody>
	  </table>
	 <br><br><center><a href= "addbarangay.php"><input class="btn btn-primary" type="button" id="list_btn" value="Add barangay"/></a>
	<a href ="home.php"><input class="btn btn-info" type="button" id="list_btn" value="Home"/></a>
	<a href ="list.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a></center>
<script>
		$(document).ready( function () {
    $('#barangay_list').DataTable();
} );
	</script>
</body>
</html>