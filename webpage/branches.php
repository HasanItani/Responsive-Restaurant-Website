<!DOCTYPE html>
<?php 
include('count.php');
?>
<html>

<head>
    <!-- title -->
    <title>Le Jardin - Branches</title>
     <!-- Link to CSS file -->
    <link rel="stylesheet" href="../CSS/branches.css">
     <!-- Link to JAVASCRIPT file -->
    <script src="../JAVASCRIPT/branches.js" type="text/javascript"></script>
     <!-- helps keeping webpage responsive  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- external CSS library to import navigator bar icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     


</head>
<!-- Calls JavaScript function "verdun()" when webpage is loaded -->
<body onload="verdun()" id="branchespage" style="width: 100%;">

<!-- top navigator bar -->
    <div class="topnav" id="myTopnav">
        <a href="homepage.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="branches.php" class="active">Branches</a>
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
    <a href="cart.php"><img style="height:20px; width:20px;" src="../save/cart-icon.png" /> Cart<span>
    <?php 
    if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));}
else{$cart_count=0;}
echo $cart_count; ?></span></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">  <!-- JAVASCRIPT function to change navigator dynamically according to dimensions   -->
            <i class="fa fa-bars"></i>  <!-- imported icon that appears on low dimensions -->
        </a>
    </div>


    <div class="main">
        <!-- Side bar containing branches hyperlinks -->
        <div class="branches">
            <nav>
                <!-- location png image  -->
                <img src="../images/location5.png" width="200px" height="200px" id="loc_pic">
                
            </br> </br>
                    <!-- Name/HyperLink of branches which calls JavaScript function (depends branch name)   -->
                <div class="name_branches">
                    <h4 class="name_color"><a onclick="verdun()">ABC Verdun</a></h4>

                    <h4 class="name_color"><a onclick="achrafieh()">ABC Achrafieh</a></h4>

                    <h4 class="name_color"><a onclick="citycenter()">City Center</a></h4>

                    <h4 class="name_color"><a onclick="spot()">Spot Choueifat</a></h4>

                    <h4 class="name_color"><a onclick="lemall()">Le Mall Dbayeh</a></h4>
                </div>
            </nav>

        </div>
        <!-- Hidden branch hyperlink (appears on low dimensions) -->
        <div class="hidden_branches">
            <h4 class="name_color">
                <a onclick="verdun()">ABC Verdun</a>
                <a onclick="achrafieh()">ABC Achrafieh</a>
                <a onclick="citycenter()">City Center</a>
                <a onclick="spot()">Spot Choueifat</a>
                <a onclick="lemall()">Le Mall Dbayeh</a>
            </h4>

        </div>

        <div id="info">
            <!-- information displayed according to each branch -->
            <h3 id="name" style="color: goldenrod;"></h3>
            <p id="address" style="color: black"></p>
            <a id="phone" href="" style="color: black;"></a>
            </br>
            </br>
            <!-- iframe used to get google map of each branch (src changed in JavaScript) -->
            <iframe src="" id="map" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>

    </div>
    <?php 
   include('../footer.html');
?>
</body>

</html>