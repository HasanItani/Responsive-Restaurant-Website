<!DOCTYPE html>
<?php 
$message="";
$file = "../data/form.txt";


if(isset($_POST["submit"])){
 


    
    $email = $_POST["email"];
    $password = $_POST["password"];
    $registered = FALSE;
    
    
    if (count(file($file)) != 0){
        foreach (file($file) as $line) {  
            list($emailtemp,$pass) = explode(", ",$line);
           
            if (strcmp($emailtemp, $email)==0 && strcmp($pass, $password)==0){
       
                $registered = TRUE;
               
                break;
            }
        }
    }

    if ($registered){
		
          $message="Welcome Back!";
          
          header("Location: homepage.php");
                   
				
				}
                
                else{
		
				$message="Incorrect Username or Password";
						
			
				}
    


            }
            ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Popup Login Form Design | CodingNepal</title> -->
    <link rel="stylesheet" href="../CSS/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="center">
      <!-- <input type="checkbox" id="show">
      <label for="show" class="show-btn">View Form</label> -->
      <div class="container">
        <label for="show" class="close-btn fas fa-times" title="close"></label>
        <div class="text">Login </div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <div class="data">
            <label>Email</label>
            <input name="email" type="text" required>
          </div>
<div class="data">
            <label >Password</label>
            <input name="password" type="password" required>
          </div>
          <p style="color:red"><?=$message ?></p>
          <br>
<div class="forgot-pass">
<a href="#">Forgot Password?</a></div>
<div class="btn">
            <div class="inner">
</div>
<button type="submit" name="submit">login</button>
          </div>
<div class="signup-link">
Not a member? <a href="signup.php">Signup now</a></div>
</form>
</div>
</div>
</body>
</html>