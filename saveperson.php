<?php
session_start();

$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$officer_id = mysqli_real_escape_string($mysqli, $_POST['officer_id']);
$person_id = mysqli_real_escape_string($mysqli, $_POST['person_id']);
$lastname = mysqli_real_escape_string($mysqli, $_POST['lastname']);
$firstname = mysqli_real_escape_string($mysqli, $_POST['firstname']);
$middlename = mysqli_real_escape_string($mysqli, $_POST['middlename']);
$birthplace = mysqli_real_escape_string($mysqli, $_POST['birthplace']);
$birthdate = mysqli_real_escape_string($mysqli, $_POST['birthdate']);
$sex = mysqli_real_escape_string($mysqli, $_POST['sex']);
$civilstatus = mysqli_real_escape_string($mysqli, $_POST['civilstatus']);
$citizenship = mysqli_real_escape_string($mysqli, $_POST['citizenship']);
$occupation = mysqli_real_escape_string($mysqli, $_POST['occupation']);


$sql = "INSERT INTO `person` (`officer_id`, `person_id`, `lastname`, `firstname`, `middlename`, `birthplace`, `birthdate`, `sex`, `civilstatus`, `citizenship`, `occupation`) 
VALUES ('$officer_id','$person_id', '$lastname', '$firstname', '$middlename', '$birthplace', '$birthdate', '$sex', '$civilstatus', '$citizenship', '$occupation');";



$result =  mysqli_query($mysqli, $sql);
if ($result == true){
header("Location: personlist2.php?save=success");
}		
else {
	echo "erorr";
}


