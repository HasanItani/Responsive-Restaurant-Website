<!DOCTYPE html>
<?php 
$message="";
if(isset($_POST["submit"])){
// Sign UP
if(strcmp($_POST["hidden"],"signup")==0){

$email=$_POST["emailup"];
$password=$_POST["passwordup"];
$repassword=$_POST["repasswordup"];

if(strcmp($password,$repassword)==0){
// same passwords
$file = "../data/form.txt";
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
   $message="You are already registered, Go to SignIn Page";

}
else{
    file_put_contents($file,$email.", ".$password."\n" ,FILE_APPEND);
    $message="DONE!";
}
}


else{
// passwords doesnt match
$message="Passwords does not match ";

}


}

// Sign In
else{
// 
    $username=$_POST["usernamein"];
    $password=$_POST["passwordin"];
  
}
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" ><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" checked ><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" name="emailin" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="passwordin" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
                <input type="hidden" name="hidden" value="signin">
                <!-- ---------------------------------------------------- -->
				<div class="group">
					<input type="submit" class="button" name="submitin" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
</form>        
            
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <!-- Signup -->
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="text" name="emailup" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="passwordup" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" name="repasswordup" class="input" data-type="password">
				</div>
                <p style="color:red"><?=$message?></p>
                <input type="hidden" name="hidden" value="signup">

				<!-- <div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div> -->
                </form>
                <!-- --------------------------------------------------------------- -->
				<div class="group">
					<input type="submit" name="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>