<?php 
session_start();
$_SESSION['success']="log out";
$_SESSION['admin']="false";
unset($_SESSION['name']);
header('location: login.php');
?>