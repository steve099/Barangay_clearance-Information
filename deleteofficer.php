<?php
session_start();

$host = '';
$db ='';
$id=$_GET['id'];
$mysqli = new mysqli('localhost','root','','barangay') or die(mysqli_error($mysqli));

$sql = "DELETE FROM `brg_officer` WHERE `brg_officer`.`officer_id` = $id;";


mysqli_query($mysqli, $sql);
		
header("Location: brgofficerlist.php?save=success");