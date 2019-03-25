<?php
session_start();

$host = '';
$db ='';
$id=$_GET['id'];
$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$sql = "DELETE FROM `person` WHERE `person`.`person_id` = $id;";


mysqli_query($mysqli, $sql);
		
header("Location: personlist2.php?delete=success");