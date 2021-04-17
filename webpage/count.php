<?php 
session_start();

if(!empty($_SESSION["shopping_cart"])) {
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));}
    else{$cart_count=0;}
// $cart_count = count(array_keys($_SESSION["shopping_cart"]));


if(!isset($_SESSION['success'])){
    $_SESSION['success']="logged out";
}
if(!isset($_SESSION['admin'])){
    $_SESSION['admin']="false";
}

?>