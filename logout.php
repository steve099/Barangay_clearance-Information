<?php
 session_start();
 if(session_destroy()) // Destroying All Sessions
{
unset($_SESSION['username']);
header('Location:login.php');// Redirecting To Home Page
}
?>