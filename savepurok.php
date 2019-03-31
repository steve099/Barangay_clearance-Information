<?php
session_start();

$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$officer_id = mysqli_real_escape_string($mysqli, $_POST['officer_id']);
$purok = mysqli_real_escape_string($mysqli, $_POST['purok']);

$sql = "INSERT INTO `purok2` (`officer_id`, `purok`) 
VALUES ('$officer_id','$purok');";



$result =  mysqli_query($mysqli, $sql);
echo "<script> alert('Succesfully Added!'); window.location.href='puroklist.php';</script>";

?>