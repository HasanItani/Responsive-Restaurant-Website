<?php
session_start();

// initializing variables
$email    = "";
$errors = array(); 

// connect to the database
include('S-db-con.php');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $name = mysqli_real_escape_string($mysqli, $_POST['name']);
  $address = mysqli_real_escape_string($mysqli, $_POST['address']);
  $code = mysqli_real_escape_string($mysqli, $_POST['code']);
  $password_1 = mysqli_real_escape_string($mysqli, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($mysqli, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($mysqli, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    if ($code == NULL){
      $password = md5($password_1);//encrypt the password before saving in the database

      $query = "INSERT INTO users (name,email, password,address,admin) 
            VALUES('$name', '$email', '$password', '$address', false)";
      mysqli_query($mysqli, $query);
      $_SESSION['email'] = $email;
      $_SESSION['name'] = $name ;
      $_SESSION['admin'] = "false" ;
      $_SESSION['address'] = $address;
      $_SESSION['success'] = "You are now logged in";
      header('location: homepage.php');

    }

     elseif($code == 961){
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name,email, password,address,admin) 
  			  VALUES('$name', '$email', '$password', '$address', true)";
  	mysqli_query($mysqli, $query);
  	$_SESSION['email'] = $email;
    $_SESSION['name'] = $name ;
    $_SESSION['admin'] = "true" ;
    $_SESSION['address'] = $address;
  	$_SESSION['success'] = "You are now logged in";
    header('location: homepage.php');
      }
      else{
        array_push($errors, "Wrong Code!");
      }



  

  }
}



// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {

        $password = md5($password);
        
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";

        $results = mysqli_query($mysqli, $query);

        if (mysqli_num_rows($results) == 1) {

          $row = mysqli_fetch_assoc( $results );

         if($row['admin'] == 1 ){
          $_SESSION['admin'] = "true";
         }

         else{
          $_SESSION['admin'] = "false";
         }
        
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        $_SESSION['address'] = $row['address'];
          header('location: homepage.php');
        }

        else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

?>