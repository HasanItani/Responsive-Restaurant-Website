<?php 
session_start();

if(!empty($_SESSION["shopping_cart"])) {
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));}
    else{$cart_count=0;}
// $cart_count = count(array_keys($_SESSION["shopping_cart"]));

if(session_id())
{
     // session has been started
}
else
{
    $_SESSION['sucess']="logged out";
 
}

?>