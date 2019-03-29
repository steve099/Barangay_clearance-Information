<?php
session_start();

$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));
$person_id = mysqli_real_escape_string($mysqli, $_POST['person_id']);
$ctc_no = mysqli_real_escape_string($mysqli, $_POST['ctc_no']);
$placed_issue = mysqli_real_escape_string($mysqli, $_POST['placed_issue']);
$date_issue = mysqli_real_escape_string($mysqli, $_POST['date_issue']);


$sql = "INSERT INTO `cedula` (`person_id`,`ctc_no`, `placed_issue`, `date_issue`) 
VALUES ('$person_id','$ctc_no', '$placed_issue', '$date_issue');";



$result =  mysqli_query($mysqli, $sql);
if ($result == true){
header("Location: cedulalist.php?save=success");
}		
else {
	echo "error";
}

