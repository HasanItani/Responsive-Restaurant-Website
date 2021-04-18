<?php 
include('S-db-con.php');
session_start();




$query = 
'CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `date` varchar(100) NOT NULL,
  `order` varchar(100) NOT NULL,
  `price` INT NOT NULL,
  `method` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `promo` boolean NOT NULL,
  `isDone` boolean NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8';

if(!mysqli_query($mysqli, $query)){
    echo 'Query error: '. mysqli_error($mysqli);
    die();
}

$address = "qq";
$method = "";
$order = "";
$price = 0;
$promo=0;
$done=0;
foreach ($_SESSION["shopping_cart"] as $product){

$order .= $product["name"] ." x" . $product["quantity"]; 
$order .= "";
$price += $product["price"] * $product["quantity"];
}

if(isset($_SESSION["promo"])){
    $temp=$price*15/100;
    $price-=$temp;
    $promo=1;
}



if($_POST["out"] == "delivery"){
    $method = "Delivery";
    $address = $_SESSION['address'];
}
else{
    $method = "Pickup";
    $address = "";
}





$query1 =  "INSERT INTO `orders` (`id`, `order`, `price`, `method`, `address`, `promo`,`isDone`) VALUES (NULL, '$order', '$price', '$method', '$address', false, false)";
if(!mysqli_query($mysqli, $query1)){
    echo 'Query error: '. mysqli_error($mysqli);
    die();
}
?>

