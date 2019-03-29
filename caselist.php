<?php
session_start();
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
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

</head>
<title>Barangay System</title>

<body>

<center><h2> Case List </h2>
<table class="table table-bordered table-hover table-striped">
<table style="width:80%">
  <tr>
		<th scope="col">|Officer name</th>
        <th scope="col">|Person name</th>
        <th scope="col">|Kaso</th>
		<th scope="col">|Victim</th>
		<th scope="col">|Date</th>
		<th scope="col">|Status</th>
         <th scope="col">|Function</th>
      </center></tr>

 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>
				
			<tr>
			<td> | <?php echo $information['lname']." ".$information["fname"]." | ".$information["position"];?></td>
			<td> | <?php echo $information['firstname']." ".$information["lastname"];?></td>
			<td> | <?php echo $information['kaso'];?></td>
			<td> | <?php echo $information['victim'];?></td>
			<td> | <?php echo $information['date'];?></td>
			<td> | <?php echo $information['status'];?></td>
			

	<td> | <a class="btn btn-danger" href="deletecase.php?id=<?php echo $information['person_id']; ?>">Delete</i></a>
		</td>
	<td> | 
    <a class="btn btn-success" href="editcase.php?edit_id=<?php echo $information['person_id']; ?>">Edit</i></a>
		</td>


	</tr>
    	<?php
    		}
      	?>
	
	</tbody>
	  </table>
	 <br><br><br><br><a href= "add case.php"><input class="btn btn-primary"  type="button" id="list_btn" value="Add Kaso"/></a>
	<a href ="home.php"><input class="btn btn-info" type="button" id="list_btn" value="Home"/></a>
	<a href ="list.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a>

</body>
</html>