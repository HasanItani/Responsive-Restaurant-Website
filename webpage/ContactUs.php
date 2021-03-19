<!DOCTYPE html>

<html>

<head>
        <!-- title -->
        <title>Le Jardin - Contact Us</title>
        <!-- Link to CSS file -->
        <link rel="stylesheet" href="../CSS/ContactUs.css" type="text/css">
        <!-- Link to JAVASCRIPT file -->
        <script src="../JAVASCRIPT/contactus.js" type="text/javascript"></script>
        <!-- External CSS library to import icons -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- helps keeping webpage responsive  -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- external CSS library to import navigator bar icon  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
</head>

<body id="ContactUspage">
    <!-- top navigator bar -->
<div class="topnav" id="myTopnav">
    <a href="../homepage.php" >Home</a>
    <a href="menu.php">Menu</a>
    <a href="branches.php">Branches</a>
    <a href="ContactUs.php" class="active">Contact Us</a>
    <a href="RateUs.php">Rate Us</a>
    <a href="quiz.php">Quiz</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <!-- JAVASCRIPT function to change navigator dynamically according to dimensions   -->
      <i class="fa fa-bars"></i>  <!-- imported icon that appears on low dimensions -->
    </a>
  </div>

    <section class="contact">
       
        <div class="content">
            <h2>We Would Like To Hear From You!</h2>
            <br>
            <br>
        </div>

        <div class="container">
            <!-- contains all tags on the left -->
            <div class="contactInfo">
                <div class="box">
                    <!-- Address tag -->
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div> <!--location/address icon -->
                    <div class="text">
                        <h3>Address</h3>
                        <p>Visit our <a class="links" target="_blank"
                                href="https://goo.gl/maps/4V9EpYhp6LAXexwr8">HeadQuarters</a>
                        </p>
                    </div>
                </div>

                <!-- Phone tag -->
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div> <!--phone icon -->
                    <div class="text">
                        <h3>Phone</h3>
                        <p>Our Hotline: <a class="links" href="tel:111">111</a></p>
                    </div>

                </div>
                
                <!-- email tag -->
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>  <!--mail icon -->
                    <div class="text">
                        <h3>E-mail</h3>
                        <p>LeJardin.RHU@outlook.com</p>
                    </div>
                </div>
            </div>
            <!-- Send message form -->
            <div class="contactForm">
                <!-- sends email to the restaurants email -->
                <!-- "mailto:Lejardin.RHU@outlook.com" is an email created for this restaurant  -->
                <form method="post" action="mailto:Lejardin.RHU@outlook.com">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <!-- input of type text -->
                        <input id="fullName" type="text" name="fullname" required="required">
                        <span> Full Name </span>
                    </div>

                    <div class="inputBox">
                        <!-- input of type email to validate user's input  -->
                        <input id="email" type="email" name="email" required="required">
                        <span> E-mail </span>
                    </div>
                    <!-- submit button -->
                    <input id="submit" type="submit" name="submit" value="Go to Webmail">

                </form>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <!-- footer text -->
        <p id="footerContent">Our price includes the sales tax of 11%. Delivery charge will apply. Prices, participation,
          delivery area and charges
          may vary.<br>
  
          <br>Our Guarantee: If you are not completely satisfied with your experience, we will make it right.<br>
        </p><br>
        <center>
          <div id="social">
             <!-- social media hyperlink images -->
            <a href="https://facebook.com" target="_blank"> <img src="../images/fblogo.png" width="3.2%" height="3.2%"> </a>
            <a href="https://instagram.com" target="_blank"> <img src="../images/instalogo.png" width="3%" height="3%"> </a>
            <a href="https://twitter.com" target="_blank"> <img src="../images/twitterlogo.png" width="3%" height="3%"> </a>
          </div><br>
          <p>Copyright ©️ 2020 by Le Jardin</p>
        </center>
      </footer>
</body>

</html>