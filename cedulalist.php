<?php
session_start();
require 'connect.php';
	$sql = "SELECT * FROM cedula";
	$records=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<title>Barangay System</title>

<body>

<center><h2>Cedula List </h2>
<table class="table table-bordered table-hover table-striped">
<table style="width:40%">
  <tr>
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
			<td> | <?php echo $information['ctc_no']?></td>
			<td> | <?php echo $information['placed_issue']?></td>
			<td> | <?php echo $information['date_issue']?></td>
			

	<td> | <a href="deletecedula.php?id=<?php echo $information['ctc_no']; ?>">Delete</i></a>
		</td>
	<td> | 
    <a href="editcedula.php?edit_id=<?php echo $information['ctc_no']; ?>">Edit</i></a>
		</td>


	</tr>
    	<?php
    		}
      	?>
	
	</tbody>
	  </table>
	 <br><br><br><br><a href= "addcedula.php"><input class="btn" type="button" id="list_btn" value="Add cedula"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Home"/></a>

</body>
</html>