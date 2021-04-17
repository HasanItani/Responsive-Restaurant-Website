<?php
session_start();


$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      } 
}
}
 
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/cart.css">
      <!-- external CSS library to import navigator bar icon  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    <title>Document</title>
</head>
<body>
    
<?php
if($_SESSION['success'] !="You are now logged in"){
  ?>
  <div class="error1"> 
<p> Please <a href="login.php">Login</a> to proceed </p>
</div>

<?php 
}
else{
?>

<div class="topnav" id="myTopnav">
    <a href="homepage.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="branches.php">Branches</a>
    <a href="ContactUs.php">Contact Us</a>
    <a href="RateUs.php">Rate Us</a>
    <a href="quiz.php">Promo Code</a>
    <a href="signup.php"><?php  if($_SESSION['success']=="You are now logged in") echo $_SESSION['name']; else echo "Signup/Login"; ?></a>
<?php if($_SESSION['admin']=="true"){ ?>
    <a href="add.php">ADD</a>
<?php } ?>  
<?php if ($_SESSION['admin'] == "true") { ?>
        <a href="inbox.php" class = "active">INBOX</a>
        <?php } ?>
    <a href="cart.php"class="active"><img style="height:15px; width:15px;" src="../save/cart-icon.png" /> Cart<span>
    <?php 
    if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));}
else{$cart_count=0;}
echo $cart_count; ?></span></a>
</div>
<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?> 
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr> 
<?php 
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td>
<img src='../save/<?php echo $product["image"]; ?>' width="50" height="40" />
</td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onChange="this.form.submit()">

<option <?php if($product["quantity"]==1) ?>
value="1">1</option>
<option <?php if($product["quantity"]==2)?>
value="2">2</option>
<option <?php if($product["quantity"]==3) ?>
value="3">3</option>
<option <?php if($product["quantity"]==4) ?>
value="4">4</option>
<option <?php if($product["quantity"]==5) ?>
value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);



if(isset($_POST['submit_promo'])){

    $temp=$total_price*15/100;
    $total_price-=$temp;
  
  }

}

?>

<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</tr>

<tr>
<td colspan="5" align="right">


<?php 
if(!isset($_POST['submit_promo'])){
?>
  <form action="" method="POST">
<br>
<label for="code">Enter Promo code (optional)</label>
<input type="text" name="code">
<input type="submit" name="submit_promo">
</form>
</tr>


<tr>
<td colspan="5" align="right">
<form action="checkout.php" method="POST">
<label for="delivery">Delivery</label>
<input type="radio" name="out" id="delivery" value="delivery" checked="check">
<br>
<label for="pickup">Pickup</label>
<input type="radio" name="out" id="Pickup" value="pickup">



</tr>

<tr>
<td colspan="5" align="right">

    <input type="submit" value="Checkout" />
</form>
</tr>




 <?php
}


?>


</td>
</tr>
</tbody>
</table> 




  <?php
}else{
 echo "<h3>Your cart is empty!</h3>";
 }
?>
</div>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<?php }?>
</body>
</html>