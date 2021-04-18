<?php 
session_start();
$_SESSION['success']="log out";
$_SESSION['admin']="false";


unset($_SESSION['name']);
unset($_SESSION["email"]);
unset($_SESSION["address"]);

header('location: login.php');
?>