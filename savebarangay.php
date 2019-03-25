<?php
session_start();

$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$officer_id = mysqli_real_escape_string($mysqli, $_POST['officer_id']);
$address = mysqli_real_escape_string($mysqli, $_POST['address']);

$sql = "INSERT INTO `barangay1` (`officer_id`, `address`) 
VALUES ('$officer_id', '$address');";



$result =  mysqli_query($mysqli, $sql);
if ($result == true){
header("Location: barangaylist.php?save=success");
}		
else {
	echo "error";
}