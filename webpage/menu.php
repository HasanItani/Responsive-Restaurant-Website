<!DOCTYPE html>

<html>

<head>
    <!-- title -->
    <title>Le Jardin - Menu</title>
     <!-- Link to CSS file -->
     <link rel="stylesheet" href="../CSS/menu.css">
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
            <!-- images are placed in table -->
            <table border="0px" class="table6">
                <tr>
                    <th>
                        <!-- image & caption -->
                        <img src="../images/bb1.jpg" class="image6">
                        <p>Butter Croissant</p>
                    </th>
                    <th>
                          <!-- image & caption -->
                        <img src="../images/bb2.jpg" class="image6">
                        <p>Club Sanwich</p>
                    </th>
                    <th>
                          <!-- image & caption -->
                        <img src="../images/bb3.jpg" class="image6">
                        <p>Man'oushe</p>
                    </th>
                </tr>
                <tr>
                    <th>
                          <!-- image & caption -->
                        <img src="../images/bb4.jpg" class="image6">
                        <p>Chorizo Omlette</p>
                    </th>
                    <th>
                          <!-- image & caption -->
                        <img src="../images/bb5.jpg" class="image6">
                        <p>Turkey Sandwich</p>
                    </th>
                    <th>
                          <!-- image & caption -->
                        <img src="../images/bb6.jpg" class="image6">
                        <p>Ultimate Pancake</p>
                    </th>
                </tr>
            </table>
        </div>
          <!-- 2nd element in accordion -->
        <button class="accordion">Pizza & Burgers</button>
        <div class="panel">
             <!-- images are placed in table -->
            <table class="table4">
                <tr>
                    <th>
                          <!-- image & caption -->
                        <img src="../images/burger1.jpg" class="image4">
                        <p>Beef Burger</p>
                    </th>
                    <th>
                          <!-- image & caption -->
                        <img src="../images/burger2.jpg" class="image4">
                        <p>Grilled Chicken Burger</p>
                    </th>
                </tr>
                <tr>
                    <th>
                          <!-- image & caption -->
                        <img src="../images/pizza1.jpg" class="image4">
                        <p>Margheritta Pizza</p>
                    </th>
                    <th>
                          <!-- image & caption -->
                        <img src="../images/pizza2.jpg" class="image4">
                        <p>Pepperoni Pizza</p>
                    </th>
                </tr>
            </table>
        </div>

          <!-- 3rd element in accordion -->
        <button class="accordion">Mains & Grills</button>
        <div class="panel">
               <!-- images are placed in table -->
            <table border="0px" class="table4">
                <tr>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/main1.jpg" class="image4">
                        <p>Chicken Fillet</p>
                    </th>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/main2.jpg" class="image4">
                        <p>Fillet Mignon</p>
                    </th>
                </tr>
                <tr>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/main3.jpg" class="image4">
                        <p>Salmon</p>
                    </th>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/main4.jpg" class="image4">
                        <p>Shrimp Pasta</p>
                    </th>
                </tr>
            </table>
        </div>

        <!-- 4th element in accordion -->
        <button class="accordion">Soups</button>
        <div class="panel">
            <!-- images are placed in table -->
            <table border="0px" class="table4">
                <tr>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/soup3.jpg" class="image4">
                        <p>Tomato Soup</p>
                    </th>
                    <th> 
                        <!-- image & caption -->
                        <img src="../images/soup2.jpg" class="image4">
                        <p>Mushroom Soup</p>
                    </th>
                </tr>
                <tr>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/soup1.jpg" class="image4">
                        <p>Chicken Soup</p>
                    </th>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/soup4.jpg" class="image4">
                        <p>Lentil Soup</p>
                    </th>
                </tr>
            </table>

        </div>

        <!-- 5th element in accordion -->
        <button class="accordion">Desserts</button>
        <div class="panel">
            <!-- images are placed in table -->
            <table border="0px" class="table4">
                <tr>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/dessert1.jpg" class="image4">
                        <p>Cinamon Roll</p>
                    </th>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/dessert2.jpg" class="image4">
                        <p>Creme Brulee</p>
                    </th>
                </tr>
                <tr>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/dessert3.jpg" class="image4">
                        <p>Red Velvet Cake</p>
                    </th>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/dessert4.jpg" class="image4">
                        <p>Tiramisu</p>
                    </th>
                </tr>
            </table>
        </div>

        <!-- 6th element in accordion -->
        <button class="accordion">Bevarages</button>
        <div class="panel">

            <!-- images are placed in table -->
            <table border="0px" class="table6">
                <tr>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/bevarage1.jpg" class="image6" width="300px" height="300px">
                        <p>Cappuccino</p>
                    </th>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/bevarage2.jpg" class="image6" width="300px" height="300px">
                        <p>Espresso</p>
                    </th>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/bevarage3.jpg" class="image6" width="300px" height="300px">
                        <p>Minted Mojito</p>
                    </th>
                </tr>
                <tr>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/bevarage4.jfif" class="image6" width="300px" height="300px">
                        <p>Orange Juice</p>

                    </th>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/bevarage7.jpg" class="image6" width="300px" height="300px">
                        <p>Oreo-Milkshake</p>
                    </th>
                    <th>
                         <!-- image & caption -->
                        <img src="../images/bevarage6.jfif" class="image6" width="300px" height="300px">
                        <p>Tea</p>
                    </th>
                </tr>
            </table>
        </div>



    </div>

    <script>

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