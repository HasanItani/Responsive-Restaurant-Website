
<?php 

include('S-db-con.php');

include('server.php');

$query = 
'CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `admin` boolean NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8';

if(!mysqli_query($mysqli, $query)){
    echo 'Query error: '. mysqli_error($mysqli);
    die();
}
// echo ' table created successfully<br>';

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="../CSS/signup.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title> Sign Up </title>
  </head>
  <body>
    <div class="center">
      <!-- <input type="checkbox" id="show">
      <label for="show" class="show-btn">View Form</label> -->
      <div class="container">
       <a href="homepage.php"> <label for="show" class="close-btn fas fa-times" title="close"></label> </a>

       <?php if($_SESSION['success']=="You are now logged in"){
?>
<p>You are already signed in <?php echo $_SESSION['email']?> ! </p>
<p>Would you like to <a href="signout.php">Sign out?</a></p>




<?php 
}

else{
?>

        <div class="text">Signup </div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

          <div class="data">
          <label >Name</label>
            <input name="name" type="name" required><br><br>
</div>

            <div class="data">
            <label>Email</label>
            <input name="email" type="email"  value="<?= $email;?>" required>
          </div>

          <div class="data">
          <label >Address</label>
          <input name="address" type="address" required><br><br>
</div>
<div class="data">
          <label >Validation Code (Admins Only)</label>
          <input name="code" type="code"><br><br>
</div>
<div class="data">
            <label >Password</label>
            <input name="password_1" type="password" required><br><br>
            <label >Repeat Password</label>
            <input name="password_2" type="password" required><br>
          <br>
          <br><br>
          
          </div>
          
          <br><br><br>
<div class="btn">
            <div class="inner">
</div>
<button type="submit" name="reg_user">Register</button>


          </div>
          <?php include('errors.php'); ?>
<div class="signup-link">
Already have an account? <a href="login.php">Login now</a></div>
</form>
</div>
</div>

<?php }?>
</body>
</html>