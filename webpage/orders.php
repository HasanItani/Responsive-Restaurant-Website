<!DOCTYPE html>

<?php

include('S-db-con.php');
include('count.php');

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- title -->
      <title>Le Jardin - INBOX</title>
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="../CSS/ContactUs.css" type="text/css">
    <!-- Link to JAVASCRIPT file -->
    <script src="../JAVASCRIPT/contactus.js" type="text/javascript"></script>
    <!-- External CSS library to import icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- helps keeping webpage responsive  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- external CSS library to import navigator bar icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      fieldset {

        border-color: goldenrod;
        padding: 25px;
        border-width: 5px;
        font-family: Helvetica;

      }

      label {
        display: inline-block;
      
      }

      body {
        background-image: url("https://images.unsplash.com/photo-1590272456521-1bbe160a18ce?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80");
        color: goldenrod;
      }

      thead {
        color: goldenrod;
      }

      tr {
        color: goldenrod;
      }
    </style>
</head>
<body>
    
<div class="topnav" id="myTopnav">
        <a href="homepage.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="branches.php">Branches</a>
        <a href="ContactUs.php">Contact Us</a>
        <a href="RateUs.php">Rate Us</a>
        <a href="quiz.php">Promo Code</a>
        <a href="signup.php"><?php if ($_SESSION['success'] == "You are now logged in") echo $_SESSION['name'];
                                else echo "Signup/Login"; ?></a>
        <?php if ($_SESSION['admin'] == "true") { ?>
        <a href="add.php">ADD</a>
        <?php } ?>

        <?php if ($_SESSION['admin'] == "true") { ?>
        <a href="orders.php" class="active" >Orders</a>
        <?php } ?>

        <?php if ($_SESSION['admin'] == "true") { ?>
        <a href="inbox.php" >INBOX</a>
        <?php } ?>
        <a href="cart.php"><img style="height:20px; width:20px;" src="../save/cart-icon.png" /> Cart<span>
                <?php
                if (!empty($_SESSION["shopping_cart"])) {
                    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                } else {
                    $cart_count = 0;
                }
                echo $cart_count; ?></span></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <!-- JAVASCRIPT function to change navigator dynamically according to dimensions   -->
            <i class="fa fa-bars"></i> <!-- imported icon that appears on low dimensions -->
        </a>
        </div>

<?php


if ($_SESSION['admin'] == "false") {

    echo "ERROR!";
  } 
  


  else {

    if(isset($_POST['submitdone'])){

      $modify = $_POST['done'];
      
      $sql = "UPDATE `orders` SET isDone=1 WHERE id=$modify";
      
      if(!mysqli_query($mysqli, $sql)){
        echo 'Query error: '. mysqli_error($mysqli);
        die();
      }
      
      
      
      
      }


    $result = mysqli_query($mysqli, "SELECT * FROM `orders`");
    ?>
    <table border="1" style="background-color: #0000; color: black; margin: 100px auto;">
      <thead>
        <tr>
          <th>ID</th>
          <th>Order</th>
          <th>Price</th>
          <th>Name</th>
          <th>Email</th>
          <th>Method</th>
          <th>Address</th>
          <th>Promo</th>
          <th>isDone</th>
        </tr>
      </thead>
      <tbody>
        <?php

if(isset($_POST['submit_show'])){

if($_POST['show']=="Completed"){

  $result = mysqli_query($mysqli, "SELECT * FROM `orders` WHERE isDone=1 ");
}

elseif($_POST['show']=="Incompleted"){

  $result = mysqli_query($mysqli, "SELECT * FROM `orders` WHERE isDone=0 ");
}
        
}



        while ($row = mysqli_fetch_assoc($result)) {
          echo
          "<tr>
            <td>{$row['id']}</td>
            <td>{$row['order']}</td>
            <td>{$row['price']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['method']}</td>
            <td>{$row['address']}</td>
            <td>{$row['promo']}</td>
            <td>{$row['isDone']}</td>
           
          </tr>\n";
        }
        ?>
      </tbody>
    </table>
   
<br><br><br>  

    <form action="" method="POST">
    <center>
    
        <label for="done">Enter ID to mark done:</label>
        <input type="number" name="done" id="done" required>
        <input type="submit" name="submitdone">
        </center>
    </form>

    <form action="" method="POST">
    <center>
    <br>
    <br>
        <label for="all">Show all orders:</label>
        <input type="radio" name="show" id = "all" value = "All">
        <br>
        <label for="completed">Show completed orders:</label>
        <input type="radio" name="show" id= "completed" value = "Completed">
        <br>
        <label for="incompleted">Show incompleted orders:</label>
        <input type="radio" name="show" id= "incompleted" value = "Incompleted">
        
        <br><input type="submit" name="submit_show">
        </center>
    </form>
<?php
  }
?>


</body>
</html>




