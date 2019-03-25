<?php
session_start();

$host = '';
$db ='';
$id=$_GET['id'];
$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$sql = "DELETE FROM `barangay1` WHERE `barangay1`.`id` = $id;";



$result =  mysqli_query($mysqli, $sql);
if ($result == true){
header("Location: barangaylist.php?delete=success");
}		
else {
	echo "error";
	
}
		
