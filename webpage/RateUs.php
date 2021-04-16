<!DOCTYPE html>
<?php 
include('count.php');
?>
<html>

<head>
  <!-- title -->
  <title> Le Jardin - Rate Us</title>
  <!-- Link to CSS file -->
  <link href="../CSS/RateUs.css" type="text/css" rel="stylesheet">
  <!-- Link to JAVASCRIPT file -->
  <script src="../JAVASCRIPT/RateUs.js" type="text/javascript"></script>
  <!-- helps keeping webpage responsive  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- External CSS library to get star icon -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  

  


</head>

<body>
   <!-- top navigator bar -->
  <div class="topnav" id="myTopnav">
    <a href="homepage.php" >Home</a> 
    <a href="menu.php">Menu</a>
    <a href="branches.php">Branches</a>
    <a href="ContactUs.php">Contact Us</a>
    <a href="RateUs.php" class="active">Rate Us</a>
    <a href="quiz.php">Promo Code</a>
    <a href="signup.php"><?php  if($_SESSION['success']=="You are now logged in") echo $_SESSION['name']; else echo "Signup/Login"; ?></a>
<?php if($_SESSION['admin']=="true"){ ?>
    <a href="add.php">ADD</a>
<?php } ?>
    <a href="cart.php"><img style="height:20px; width:20px;" src="../save/cart-icon.png" /> Cart<span>
    <?php 
    if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));}
else{$cart_count=0;}
echo $cart_count; ?></span></a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <!-- JAVASCRIPT function to change navigator dynamically according to dimensions   -->
      <i class="fa fa-bars"></i> <!-- imported icon that appears on low dimensions -->
    </a>
  </div>
  

      <div class="title">
     <!-- text on top center -->
       <center>
        <h1 >Your Opinion Matters!</h1>
        <h4>We would like to know how satisfied with our service are you</h4><br><br>
      </center>
      </div>

      <div class="content" style="display: block;">

        <!-- stars and captions are placed in table of 5 rows & 2 columns -->
        <table border="0" class="table">
          <!-- ROW 1 -->
          <tr>
            <th>
              <h3>Taste :</h3>
            </th>
            <th>

               <!-- div containing 1st group of stars -->
              <div class="rate" id="A">
                <input type="radio" name="starA" id="star1"> <label for="star1"></label>
                <input type="radio" name="starA" id="star2"><label for="star2"></label>
                <input type="radio" name="starA" id="star3"><label for="star3"></label>
                <input type="radio" name="starA" id="star4"><label for="star4"></label>
                <input type="radio" name="starA" id="star5"><label for="star5"></label>
              </div>
            </th>
          </tr>
          <!-- ROW 2 -->
          <tr>
            <th>
              <h3>Service:</h3>
            </th>
            <th>
                <!-- div containing 2nd group of stars -->
              <div class="rate" id="B">
                <input type="radio" name="starB" id="star6"><label for="star6"></label>
                <input type="radio" name="starB" id="star7"><label for="star7"></label>
                <input type="radio" name="starB" id="star8"><label for="star8"></label>
                <input type="radio" name="starB" id="star9"><label for="star9"></label>
                <input type="radio" name="starB" id="star10"><label for="star10"></label>
              </div>
            </th>
          </tr>
          <!-- ROW 3 -->
          <tr>
            <th>
              <h3> Hygiene :</h3>
            </th>
            <th>
                <!-- div containing 3rd group of stars -->
              <div class="rate" id="C">
                <input type="radio" name="starC" id="star11"><label for="star11"></label>
                <input type="radio" name="starC" id="star12"><label for="star12"></label>
                <input type="radio" name="starC" id="star13"><label for="star13"></label>
                <input type="radio" name="starC" id="star14"><label for="star14"></label>
                <input type="radio" name="starC" id="star15"><label for="star15"></label>
              </div>
            </th>
          </tr>
          <!-- ROW 4 -->
          <tr>
            <th>
              <h3> Friendliness:</h3>
            </th>
            <th>
                <!-- div containing 4th group of stars -->
              <div class="rate" id="D">
                <input type="radio" name="starD" id="star16"><label for="star16"></label>
                <input type="radio" name="starD" id="star17"><label for="star17"></label>
                <input type="radio" name="starD" id="star18"><label for="star18"></label>
                <input type="radio" name="starD" id="star19"><label for="star19"></label>
                <input type="radio" name="starD" id="star20"><label for="star20"></label>
              </div>
            </th>
          </tr>
          <!-- ROW 5 -->
          <tr>
            <th>
              <h3> Professionalism:</h3>
            </th>
            <th>
               <!-- div containing 5th group of stars -->
              <div class="rate" id="E">
                <input type="radio" name="starE" id="star21"><label for="star21"></label>
                <input type="radio" name="starE" id="star22"><label for="star22"></label>
                <input type="radio" name="starE" id="star23"><label for="star23"></label>
                <input type="radio" name="starE" id="star24"><label for="star24"></label>
                <input type="radio" name="starE" id="star25"><label for="star25"></label>
              </div>
            </th>
          </tr>
          <!-- last row (contains submit button) -->
          <tr>
            <th colspan="2">
              <br><br>
              <!-- form refering to same webpage (since we dont have back-end server) -->
              <form method="POST" action="RateUs.php"> 
                <!-- submit button alert triggering appreciation message when clicked  -->
                <input type="submit" id="submit" onclick="alert('We appreciate your time taken to rate us')" onclick="rate()"></input>
              </form>

            </th>
          </tr>
        </table>

    </div>

    <?php 
   include('../footer.html');
?>
</body>

</html>