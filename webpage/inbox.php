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
        width: 115px;
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
        <a href="inbox.php" class = "active">INBOX</a>
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

    
    $result = mysqli_query($mysqli, "SELECT * FROM `messages`");
    ?>
    <table border="1" style="background-color: #0000; color: black; margin: 0 auto;">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>E-mail</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <?php

        while ($row = mysqli_fetch_assoc($result)) {
          echo
          "<tr>
            <td>{$row['id']}</td>
            <td>{$row['fullName']}</td>
            <td>{$row['email']}</td>
            <td>{$row['content']}</td>
          </tr>\n";
        }
        ?>
      </tbody>
    </table>
<?php
  }
?>


</body>
</html>




