<?php
session_start();

$host = '';
$db ='';
$id=$_GET['id'];
$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$sql = "DELETE FROM `purok2` WHERE `purok2`.`purok` = $purok;";



mysqli_query($mysqli, $sql);
		
header("Location: puroklist.php?delete=success");