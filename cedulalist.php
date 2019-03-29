<?php
session_start();
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
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

</head>
<title>Barangay System</title>

<body>

<center><h2>Cedula List </h2>
<table class="table table-bordered table-hover table-striped">
<table style="width:60%">
  <tr>
		<th scope="col">|Person Name</th>
        <th scope="col">|CTC No</th>
        <th scope="col">|Placed Issue</th>
        <th scope="col">|Date Issue</th>
         <th scope="col">|Function</th>
      </center></tr>

 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>
				
			<tr>
			<td> | <?php echo $information['lastname']." ".$information["firstname"];?></td>
			<td> | <?php echo $information['ctc_no']?></td>
			<td> | <?php echo $information['placed_issue']?></td>
			<td> | <?php echo $information['date_issue']?></td>
			

	<td> | <a class="btn btn-danger" href="deletecedula.php?id=<?php echo $information['ctc_no']; ?>">Delete</i></a>
		</td>
	<td> | 
    <a  class="btn btn-success" href="editclearance.php?edit_id=<?php echo $information['ctc_no']; ?>">Edit</i></a>
		</td>


	</tr>
    	<?php
    		}
      	?>
	
	</tbody>
	  </table>
	 <br><br><br><br><a href= "addcedula.php"><input class="btn btn-primary" type="button" id="list_btn" value="Add cedula"/></a>
	<a href ="home.php"><input class="btn btn-info"  type="button" id="list_btn" value="Home"/></a>

</body>
</html>