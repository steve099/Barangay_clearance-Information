<?php
session_start();

$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));
$officer_id = mysqli_real_escape_string($mysqli, $_POST['officer_id']);
$lastname = mysqli_real_escape_string($mysqli, $_POST['lastname']);
$firstname = mysqli_real_escape_string($mysqli, $_POST['firstname']);
$middlename = mysqli_real_escape_string($mysqli, $_POST['middlename']);
$position = mysqli_real_escape_string($mysqli, $_POST['position']);

$sql = "INSERT INTO `brg_officer` (`officer_id`, `lastname`, `firstname`, `middlename`, `position`) VALUES ('$officer_id', '$lastname', '$firstname', '$middlename', '$position');";



mysqli_query($mysqli, $sql);
		
header("Location: brgofficerlist.php?save=success");


?>