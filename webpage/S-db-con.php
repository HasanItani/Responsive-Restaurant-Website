<?php

$mysqli = mysqli_connect("localhost","myUser","myPasswd","signin/signup");

if (!$mysqli) {
    echo "Failed to connect to MySQL: " . $mysqli_connect_error();
    exit();
  }
//   else{
//       echo "connect successful";echo"<br>";
//   }
?>