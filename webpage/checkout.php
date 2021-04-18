<!DOCTYPE html>

<?php 
include('S-db-con.php');
session_start();


$message ="";

$query = 
'CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `order` varchar(100) NOT NULL,
  `price` INT NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
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

$name =  $_SESSION['name'];
$email =  $_SESSION['email'];


$query1 =  "INSERT INTO `orders` (`id`,`order`, `price`, `name`, `email`, `method`, `address`, `promo`,`isDone`) VALUES (NULL ,'$order', '$price','$name', '$email', '$method', '$address', false, false)";
if(!mysqli_query($mysqli, $query1)){
    echo 'Query error: '. mysqli_error($mysqli);
    $message = "ERROR! Try again later";
    die();}

else{
    $result = mysqli_query($mysqli , "SELECT * FROM  `orders` ");
    $num_rows = mysqli_num_rows($result);


    $message =  "Your Order ID is: $num_rows";
    unset($_SESSION["shopping_cart"]);



}



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      
      body {
        background-image: url("https://images.unsplash.com/photo-1590272456521-1bbe160a18ce?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80");
        color: goldenrod;
        font-size: larger;
      }

      .message{
          margin-top: 250px;
      }
      .message a{
          color: white;
      }
      </style>
</head>
<body>
    <center>
    
    <div class="message">
 <p>ORDER RECEIVED!</p>
    <p>Thank You for ordering. <?php echo $_SESSION['name'];?> !</p>
<p><?php echo $message; ?></p>
<br>
<br>
<p>Back to <a href="homepage.php">homepage</a>?</p>
</div>
    </center>


</body>
</html>