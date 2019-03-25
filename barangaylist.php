<?php
session_start();
require 'connect.php';
	$sql = "SELECT brg_officer.officer_id, brg_officer.lastname, brg_officer.firstname,brg_officer.position,barangay1.address
	FROM brg_officer 
	JOIN barangay1 
	ON brg_officer.officer_id = barangay1.officer_id";
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
<body>

<center><h2> List </h2>

<table class="table table-dark">
<table style="width:35%">
<thead>
  <tr>
        <th scope="col">|Officer ID</th>
        <th scope="col">|Address </th>
        <th scope="col">|Function</th>
      </center></tr>

 </thead>
 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>
				
			<tr>
			<td> | <?php echo $information['officer_id']."| ".$information["lastname"]." ".$information["firstname"]." | ".$information["position"];?></td>
			<td> | <?php echo $information['address']?></td>
					
			

	<td> | <a class="btn btn-danger" href="deletebarangay.php?id=<?php echo $information['id']; ?>">Delete</i></a>
		</td>
	<td> | 
    <a class="btn btn-success" href="editbarangay.php?edit_id=<?php echo $information['officer_id']; ?>">Edit</i></a>
		</td>


	
    	<?php
    		}
      	?>
	</tr>
	</tbody>
	  </table>
	 <br><br><br><br><a href= "addbarangay.php"><input class="btn btn-primary" type="button" id="list_btn" value="Add barangay"/></a>
	<a href ="home.php"><input class="btn btn-info" type="button" id="list_btn" value="Home"/></a>
	<a href ="list.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a>

</body>
</html>