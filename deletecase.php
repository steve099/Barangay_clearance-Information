<?php
session_start();

$host = '';
$db ='';
$id=$_GET['id'];
$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$sql = "DELETE FROM `kaso` WHERE `kaso`.`person_id` = $id;";



mysqli_query($mysqli, $sql);
		
header("Location: caselist.php?delete=success");