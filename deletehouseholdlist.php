<?php
session_start();

$host = '';
$db ='';
$id=$_GET['id'];
$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$sql = "DELETE FROM `household` WHERE `household`.`person_id`= $id;";


mysqli_query($mysqli, $sql);
		
header("Location: householdlist.php?delete=success");