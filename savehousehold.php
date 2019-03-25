<?php
session_start();

$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$officer_id = mysqli_real_escape_string($mysqli, $_POST['officer_id']);
$person_id = mysqli_real_escape_string($mysqli, $_POST['person_id']);
$brg_workers = mysqli_real_escape_string($mysqli, $_POST['brg_workers']);
$household_no = mysqli_real_escape_string($mysqli, $_POST['household_no']);
$barangay = mysqli_real_escape_string($mysqli, $_POST['barangay']);
$purok = mysqli_real_escape_string($mysqli, $_POST['purok']);
$province = mysqli_real_escape_string($mysqli, $_POST['province']);
	

$sql = "INSERT INTO `household` (`officer_id`, `person_id`, `brg_workers`, `household_no`, `barangay`, `purok`,`province`) 
VALUES ('$officer_id','$person_id', '$brg_workers', '$household_no', '$barangay', '$purok', '$province');";


$result =  mysqli_query($mysqli, $sql);
if ($result == true){
header("Location: householdlist.php?save=success");
}		
else {
	echo "error";
	
}