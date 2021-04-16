<?php 
session_start();
$_SESSION['success']="log out";
header('location: login.php');
?>