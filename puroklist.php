<?php
session_start();
require 'connect.php';
	$sql = "SELECT * FROM purok2";
	$records=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<title>Barangay System</title>

<body>

<center><h2> List </h2>
<table class="table table-bordered table-hover table-striped">
<table style="width:20%">
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
					
			

	<td> | <a href="deletepurok.php?id=<?php echo $information['purok']; ?>">Delete</i></a>
		</td>

	</tr>
    	<?php
    		}
      	?>
	
	</tbody>
	  </table>
	 <br><br><br><br><a href= "addpurok.php"><input class="btn" type="button" id="list_btn" value="Add Purok"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Home"/></a>
	<a href ="list.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>

</body>
</html>