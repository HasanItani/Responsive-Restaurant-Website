<!DOCTYPE html>
<?php include('server.php') ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Popup Login Form Design | CodingNepal</title> -->
    <link rel="stylesheet" href="../CSS/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>

<?php if($_SESSION['success']=="You are now logged in"){
?>
<p>You are already signed in <?php echo $_SESSION['email']?> ! </p>
<p>Would you like to <a href="signout.php">Sign out?</a></p>




<?php 
}

else{
?>

    <div class="center">
      <div class="container">
	  <a href="homepage.php"> <label for="show" class="close-btn fas fa-times" title="close"></label> </a>

        <div class="text">Login </div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<?php include('errors.php'); ?>
          <div class="data">
            <label>Email</label>
            <input name="email" type="email" required>
          </div>
<div class="data">
            <label >Password</label>
            <input name="password" type="password" required>
          </div>
          
          <br>
<div class="forgot-pass">
<a href="#">Forgot Password?</a></div>
<div class="btn">
            <div class="inner">
</div>
<button type="submit" name="login_user">login</button>
<?php  if (count($errors) > 0) ?>
  <div class="error">
 
          </div>
<div class="signup-link">
Not a member? <a href="signup.php">Signup now</a></div>
</form>
</div>
</div>
<?php }?>
</body>
</html>