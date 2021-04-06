<!DOCTYPE html>


<?php
session_start();
include('../data/connect.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
"SELECT * FROM `products` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];
 
$cartArray = array(
 $code=>array(
 'name'=>$name,
 'code'=>$code,
 'price'=>$price,
 'quantity'=>1,
 'image'=>$image)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
 $status = "<div class='box' style='color:red;'>
 Product is already added to your cart!</div>"; 
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
 }
 
 }
}
?>

<html>

<head>
    <!-- title -->
    <title>Le Jardin - Menu</title>
     <!-- Link to CSS file -->
     <link rel="stylesheet" href="../CSS/menu.css">
     <link rel="stylesheet" href="../CSS/style.css">
    <!-- helps keeping webpage responsive  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- external CSS library to import navigator bar icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- External CSS file for slideshow -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body id="menupage">



     <!-- top navigator bar -->
<div class="topnav" id="myTopnav">
    <a href="homepage.php">Home</a>
    <a href="menu.php" class="active">Menu</a>
    <a href="branches.php">Branches</a>
    <a href="ContactUs.php">Contact Us</a>
    <a href="RateUs.php">Rate Us</a>
    <a href="quiz.php">Promo Code</a>
    <a href="login.php">Login</a>
    <a href="cart.php"><img style="height:30px; width:30px;" src="../save/cart-icon.png" /> Cart<span>
    <?php 
    if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));}
else{$cart_count=0;}
echo $cart_count; ?></span></a>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <!-- JAVASCRIPT function to change navigator dynamically according to dimensions   -->
      <i class="fa fa-bars"></i> <!-- imported icon that appears on low dimensions -->
    </a>
  </div>
  <!-- Hyperlink image fixed to bottom left used to go back to top -->
  <a href="#myTopnav"><img src="../images/back-to-top.jpg" id="top-button" width="50px" height="50px"> </a>  


    <!-- manual/automatic SlideShow -->
    <div class="w3-container">
        
        <!-- 1st image in slideshow -->
        <div class="w3-content w3-display-container">

            <div class="w3-display-container mySlides">

                <!-- image link -->
                <img class="slideimage" src="../images/burger2.jpg" >

                <!-- image counter (appears on top left) -->
                <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
                    Grilled Chicken Burger 
                </div>

                <!-- image counter (appears on top left) -->
                <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
                    1/4
                </div>
            </div>

             <!-- 2nd image in slideshow -->
            <div class="w3-display-container mySlides">

                <!-- image link -->
                <img class="slideimage" src="../images/pizza1.jpg" >

                <!-- image caption (appears on top right)-->
                <div  class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
                    Margheritta Pizza
                </div>
                 <!-- image counter (appears on top left) -->
                <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
                    2/4
                </div>
            </div>

            <!-- 3rd image in slideshow -->
            <div class="w3-display-container mySlides">
                <!-- image link -->
                <img class="slideimage" src="../images/main2.jpg">
                <!-- image caption (appears on top right)-->
                <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
                    Fillet Mignon
                </div>
                <!-- image counter (appears on top left) -->
                <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
                    3/4
                </div>
            </div>

            <!-- 4th image in slideshow -->
            <div class="w3-display-container mySlides">

                <!-- image link -->
                <img class="slideimage" src="../images/dessert4.jpg" >

                <!-- image caption (appears on top right)-->
                <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
                    Tiramisu
                </div>
                
                   <!-- image counter (appears on top left) -->
                <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
                    4/4
                </div>
            </div>
            
            <!-- next & previous slideshow buttons -->
            <button class="w3-button w3-display-left w3-black" id="prev" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right w3-black" id="next" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div>
    <!-- Slide show ends -->

    <br><br><br> <br><br><br>

    <!-- Accordion starts -->
    <div class="accodriondiv">
        <!-- 1st element in accordion -->
        <button class="accordion">Breakfast & Brunch</button>
        <div class="panel">


<?php 
        $result = mysqli_query($con,"SELECT * FROM `products` WHERE CATEGORY = 'breakfast-brunch' ");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='image'><img class='test' src='../save/".$row['image']."' /></div>
    <div class='name'>".$row['name']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }

        ?>
        </div>


          <!-- 2nd element in accordion -->
        <button class="accordion">Pizza & Burgers</button>
        <div class="panel">
           <?php 
        $result = mysqli_query($con,"SELECT * FROM `products` WHERE CATEGORY = 'pizza-burger' ");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action='#two'>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='image'  id='two'><img class='test' src='../save/".$row['image']."' /></div>
    <div class='name'>".$row['name']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }

        ?>
        </div>

          <!-- 3rd element in accordion -->
        <button class="accordion">Mains & Grills</button>
        <div class="panel">
        <?php 
        $result = mysqli_query($con,"SELECT * FROM `products` WHERE CATEGORY = 'mains-grills' ");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='image'><img class='test' src='../save/".$row['image']."' /></div>
    <div class='name'>".$row['name']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }

        ?>
        </div>

        <!-- 4th element in accordion -->
        <button class="accordion">Soups</button>
        <div class="panel">
        <?php 

        $result = mysqli_query($con,"SELECT * FROM `products` WHERE CATEGORY = 'soups' ");
        while($row = mysqli_fetch_assoc($result)){
        echo "<div class='product_wrapper'>
        <form method='post' action=''>
        <input type='hidden' name='code' value=".$row['code']." />
        <div class='image'><img class='test' src='../save/".$row['image']."' /></div>
        <div class='name'>".$row['name']."</div>
        <div class='price'>$".$row['price']."</div>
        <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }

        ?>
        </div>

        <!-- 5th element in accordion -->
        <button class="accordion">Desserts</button>
        <div class="panel">
        <?php 
                $result = mysqli_query($con,"SELECT * FROM `products` WHERE CATEGORY = 'desserts' ");
             while($row = mysqli_fetch_assoc($result)){
            echo "<div class='product_wrapper'>
            <form method='post' action=''>
            <input type='hidden' name='code' value=".$row['code']." />
            <div class='image'><img class='test' src='../save/".$row['image']."' /></div>
            <div class='name'>".$row['name']."</div>
            <div class='price'>$".$row['price']."</div>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
            </div>";
        }

        ?>
        </div>

        <!-- 6th element in accordion -->
        <button class="accordion">Beverages</button>
        <div class="panel">

        <?php 

            $result = mysqli_query($con,"SELECT * FROM `products` WHERE CATEGORY = 'beverages' ");
            while($row = mysqli_fetch_assoc($result)){
            echo "<div class='product_wrapper'>
            <form method='post' action=''>
            <input type='hidden' name='code' value=".$row['code']." />
            <div class='image'><img class='test' src='../save/".$row['image']."' /></div>
            <div class='name'>".$row['name']."</div>
            <div class='price'>$".$row['price']."</div>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
            </div>";
        }

        ?>

        </div>



    </div>

    <script>
        var button = document.getElementsByClassName("buy");
        var acc = document.getElementsByClassName("accordion");
        var i;

        

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }




        /* manual slideshow */

        
        var slideIndex = 0; // Global variable refering to image index
        showDivs(slideIndex); //calling function to show image corresponding to index

        //function changes images back and forth when next/prev button clicked
        function plusDivs(n) { 
            showDivs(slideIndex += n);
        }
         /* manual slideshow function*/
        function showDivs(n) { 
            var i;
            var x = document.getElementsByClassName("mySlides");
           
            //return to image 1 after completing a full turn
            if (n > x.length) { 
                slideIndex = 1 
            }

            //go to last image if prev button was clicked on image 1
            if (n < 1) {
                slideIndex = x.length
            }
            //for loop to hide all images
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            //statement to show suitable image
            x[slideIndex - 1].style.display = "block";
        }

        // autonomous slideshow
        // var slideIndex = 0; //variable refering to image index
        carousel(); 
        // autonomous slideshow function
        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            // function that hides all images
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++; //increase index to go to next image

            // return to first pic when completing a full turn
            if (slideIndex > x.length) {
                slideIndex = 1
            }
            //statement to show suitable image
            x[slideIndex - 1].style.display = "block"; 

            setTimeout(carousel, 3000); // Timeout for this function to change image every 3000 ms (3 seconds)
        }

        // function actived when pressed on navigator bar icon)
        function myFunction() {
          var x = document.getElementById("myTopnav");
          
          //changing class name to make navigation bar responsive
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }

    </script>



</body>

</html>