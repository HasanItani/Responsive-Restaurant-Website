<!DOCTYPE html>

<html>

<head>
      <!-- title -->
    <title>LE JARDIN</title>
       <!-- Link to CSS file -->
    <link rel="stylesheet" href="../CSS/homepage.css">  
    <!-- Link to JAVASCRIPT file -->
    <script src="../JAVASCRIPT/homepage.js" type="text/javascript"></script>
        <!-- helps keeping webpage responsive  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">  
        <!-- external CSS library to import navigator bar icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

</head>

<body id="homepage">
   <!-- top navigator bar -->
<div class="topnav" id="myTopnav">
    <a href="#" class="active">Home</a>
    <a href="menu.php">Menu</a>
    <a href="branches.php">Branches</a>
    <a href="ContactUs.php">Contact Us</a>
    <a href="RateUs.php">Rate Us</a>
    <a href="quiz.php">Quiz</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">      <!-- JAVASCRIPT function to change navigator dynamically according to dimensions   -->
   
      <i class="fa fa-bars"></i> <!-- imported icon that appears on low dimensions -->
    </a>
  </div>

<img id="bodypic" src="images/LeJardin.png" > <!-- Background image -->
<br>

<!-- Side bar that contains restuarant's mission -->
    <div class="HomeSidebar">
        <h1> Hello! </h1>
        <p id="AboutUs"> Our mission is to give our customers a place to celebrate life’s special moments by offering
            the best food, service, and ambiance in Beirut. <br> </p>
    </div>
    </div>
<?php 
   include('../footer.html');
?>
    </div>

        
</body>

</html>