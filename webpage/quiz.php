<!DOCTYPE html>
<html lang="en">

<head>
  <!-- title -->
  <title>Le Jardin - Quiz</title>
  <!-- Link to CSS file -->
  <link rel="stylesheet" href="../CSS/quiz.css">
  <!-- helps keeping webpage responsive  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- External CSS library to get icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<!-- Calls JavaScript function "bodyload()" when webpage is loaded -->
<body onload="bodyload()">
   
    <!-- top navigator bar -->
<div class="topnav" id="myTopnav">
    <a href="../homepage.php" >Home</a>
    <a href="menu.php" >Menu</a>
    <a href="branches.php">Branches</a>
    <a href="ContactUs.php">Contact Us</a>
    <a href="RateUs.php">Rate Us</a>
    <a href="quiz.php" class="active">Quiz</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <!-- JAVASCRIPT function to change navigator dynamically according to dimensions   -->
      <i class="fa fa-bars"></i>  <!-- imported icon that appears on low dimensions -->
    </a>
  </div>

  <br><br><br>
  <div class="quiz-container">
    <div id="quiz"></div>
  </div>
  <br><br>
  <!-- "previous" button to go back -->
  <button id="previous">Previous Question</button> 

   <!-- "next" button to go forward -->
  <button id="next">Next Question</button>

   <!-- "submit" button to submit answers and calls "disable()" function when clicked to avoid being clicked again thus getting another promo code -->
  <button onclick="disable()" id="submit">Submit Quiz</button>
  <!-- div showing quiz results -->
  <div id="results"></div>
  <!-- paragraph that shows promo code in case user gets full mark -->
  <p id="promo"></p>


   <!-- Footer -->
  <footer class="footer">
    <!-- footer text -->
    <p id="footerContent">Our price includes the sales tax of 11%. Delivery charge will apply. Prices,
      participation, delivery area and charges may vary.<br>

      <br>Our Guarantee: If you are not completely satisfied with your experience, we will make it right.<br>
    </p>
    <center>
      <!-- social media hyperlink images -->
      <div id="social">
        <a href="https://facebook.com" target="_blank"> <img src="../images/fblogo.png" width="3.2%" height="3.2%"> </a>
        <a href="https://instagram.com" target="_blank"> <img src="../images/instalogo.png" width="3%" height="3%"> </a>
        <a href="https://twitter.com" target="_blank"> <img src="../images/twitterlogo.png" width="3%" height="3%"> </a>
      </div>
      <p>Copyright ©️ 2020 by Le Jardin</p>
    </center>
  </footer>
</body>

<!-- External CSS library to get star icon -->
<script src="../JAVASCRIPT/quiz.js" type="text/javascript"></script>

</html>