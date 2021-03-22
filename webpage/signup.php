<!DOCTYPE html>
<?php 
$message="";
$file = "../data/form.txt";


if(isset($_POST["submit"])){
 
    
    $email=$_POST["email"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];
    
    if(strcmp($password,$repassword)==0){
    // same passwords
    
    $registered = FALSE;
    
    if (count(file($file)) != 0){
        foreach (file($file) as $line) {   
            list($emailtemp,$pass) = explode(", ", $line);
            if (strcmp($emailtemp, $email)==0){
                $registered = TRUE;
                break;
            }
        }
    }
    
    if ($registered){
       $message="You are already registered";
    
    }
    else{
        $put = "$email, $password, \n";
        file_put_contents($file,$put,FILE_APPEND);
        $message="DONE!";
        header("Location: homepage.php");
    }
    }
    
    
    else{
    // passwords doesnt match
    $message="Password does not match ";
    
    }
    
    
    }

            ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Popup Login Form Design | CodingNepal</title> -->
    <link rel="stylesheet" href="../CSS/signup.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="center">
      <!-- <input type="checkbox" id="show">
      <label for="show" class="show-btn">View Form</label> -->
      <div class="container">
       <a href="homepage.php"> <label for="show" class="close-btn fas fa-times" title="close"></label> </a>
        <div class="text">Signup </div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <div class="data">
            <label>Email</label>
            <input name="email" type="email" required>
          </div>
<div class="data">
            <label >Password</label>
            <input name="password" type="password" required><br><br>
            <label >Repeat Password</label>
            <input name="repassword" type="password" required><br>
            <p style="color:red"><?=$message ?></p>
          <br><br><br>
          </div>
          <br><br><br>
<div class="btn">
            <div class="inner">
</div>
<button type="submit" name="submit">Register</button>
          </div>
<div class="signup-link">
Already have an account? <a href="login.php">Login now</a></div>
</form>
</div>
</div>
</body>
</html>