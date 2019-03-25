<?php
session_start();

$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$person_id = mysqli_real_escape_string($mysqli, $_POST['person_id']);
$officer_id = mysqli_real_escape_string($mysqli, $_POST['officer_id']);
$kaso = mysqli_real_escape_string($mysqli, $_POST['kaso']);
$victim = mysqli_real_escape_string($mysqli, $_POST['victim']);
$date = mysqli_real_escape_string($mysqli, $_POST['date']);

$sql = "INSERT INTO `kaso` (`person_id`, `officer_id`, `kaso`,`victim`, `date`) 
VALUES ('$person_id', '$officer_id', '$kaso','$victim', '$date');";


$result =  mysqli_query($mysqli, $sql);
if ($result == true){
header("Location: caselist.php?save=success");
}		
else {
	echo "error";
	
}