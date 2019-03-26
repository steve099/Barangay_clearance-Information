<?php
session_start();
require 'connect.php';
	$sql = "SELECT * FROM purok2";
	$records=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<title>Barangay System</title>
</head>
<body>

<center><h2> List </h2>
<table class="table table-bordered table-hover table-striped">
<table style="width:40%">
  <tr>
        <th scope="col">|Officer ID</th>
        <th scope="col">|purok </th>
        <th scope="col">|Function</th>
      </center></tr>

 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>
				
			<tr>
			<td> | <?php echo $information['officer_id']?></td>
			<td> | <?php echo $information['purok']?></td>
					
			

	<td> | <a class="btn btn-danger" href="deletepurok.php?id=<?php echo $information['purok']; ?>">Delete</i></a>
		</td>

	</tr>
    	<?php
    		}
      	?>
	
	</tbody>
	  </table>
	 <br><br><br><br><a href= "addpurok.php"><input class="btn btn-primary" type="button" id="list_btn" value="Add Purok"/></a>
	<a href ="home.php"><input class="btn btn-info"  type="button" id="list_btn" value="Home"/></a>
	<a href ="list.php"><input class="btn btn-secondary" type="button" id="list_btn" value="Back"/></a>

</body>
</html>