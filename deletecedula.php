<?php
session_start();

$host = '';
$db ='';
$id=$_GET['id'];
$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$sql = "DELETE FROM `cedula` WHERE `cedula`.`ctc_no` = $id;";


mysqli_query($mysqli, $sql);
		
header("Location: cedulalist.php?delete=success");