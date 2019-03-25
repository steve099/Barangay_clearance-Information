<?php
session_start();

$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$clearance_id = mysqli_real_escape_string($mysqli, $_POST['clearance_id']);
$person_id = mysqli_real_escape_string($mysqli, $_POST['person_id']);
$officer_id = mysqli_real_escape_string($mysqli, $_POST['officer_id']);
$purpose= mysqli_real_escape_string($mysqli, $_POST['purpose']);
$ctc_no = mysqli_real_escape_string($mysqli, $_POST['ctc_no']);
$or_no = mysqli_real_escape_string($mysqli, $_POST['or_no']);
$date_issue = mysqli_real_escape_string($mysqli, $_POST['date_issue']);

$sql = "INSERT INTO `clearance` (`clearance_id`, `person_id`, `officer_id`, `purpose`, `ctc_no`, `or_no`, `date_issue`) 
VALUES ('$clearance_id', '$person_id', '$officer_id', '$purpose', '$ctc_no', '$or_no', '$date_issue');";



mysqli_query($mysqli, $sql);
		
header("Location: clearancelist.php?save=success");


