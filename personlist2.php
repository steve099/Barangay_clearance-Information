<?php
session_start();
require 'connect.php';
	$sql = "SELECT brg_officer.officer_id, brg_officer.lastname AS lname, brg_officer.firstname AS fname,brg_officer.position ,person.person_id, person.lastname, person.firstname, person.middlename,person.birthplace,person.birthdate,person.sex,person.civilstatus,person.citizenship,person.occupation 
	FROM brg_officer 
	JOIN person 
	ON brg_officer.officer_id = person.officer_id";
	$records=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<title>Barangay System</title>

<body>

<center><h2>Person List </h2>
<table class="table table-bordered table-hover table-striped">
<table style="width:125%">
  <tr>
		<th scope="col">|Officer name</th>
        <th scope="col">|Person id</th>
        <th scope="col">|Last name</th>
        <th scope="col">|First Name</th>
		<th scope="col">|Middle Name</th>
        <th scope="col">|Birthplace</th>		
		<th scope="col">|Birthdate</th>		
		<th scope="col">|Sex</th>
		<th scope="col">|CivilStatus</th>
		<th scope="col">|Citizenship</th>
		<th scope="col">|Occupation</th>
		<th scope="col">|Function</th>
      </center></tr>

 <tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>
				
			<tr>
			<td> | <?php echo $information['officer_id']."| ".$information["lname"]." ".$information["fname"]." | ".$information["position"];?></td>
			<td> | <?php echo $information['person_id']?></td>
			<td> | <?php echo $information['lastname']?></td>
			<td> | <?php echo $information['firstname']?></td>
			<td> | <?php echo $information['middlename']?></td>
			<td> | <?php echo $information['birthplace']?></td>
			<td> | <?php echo $information['birthdate']?></td>
			<td> | <?php echo $information['sex']?></td>
			<td> | <?php echo $information['civilstatus']?></td>
			<td> | <?php echo $information['citizenship']?></td>
			<td> | <?php echo $information['occupation']?></td>
			

	<td> | <a href="deleteperson.php?id=<?php echo $information['person_id']; ?>">Delete</i></a>
		</td>
	<td> | 
    <a href="editperson.php?edit_id=<?php echo $information['person_id']; ?>">Edit</i></a>
		</td>


	</tr>
    	<?php
    		}
      	?>
	
	</tbody>
	  </table>
	 <br><br><br><br><a href= "addperson2.php"><input class="btn" type="button" id="list_btn" value="Add person"/></a>
	<a href ="home.php"><input class="btn" type="button" id="list_btn" value="Home"/></a>
	<a href ="list.php"><input class="btn" type="button" id="list_btn" value="Back"/></a>

</body>
</html>