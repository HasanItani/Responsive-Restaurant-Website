<?php

$mysqli = mysqli_connect("localhost","test","test","users");

if (!$mysqli) {
    echo "Failed to connect to MySQL: " . $mysqli_connect_error();
    exit();
  }
  // else{
  //     echo "connect successful";echo"<br>";
  // }
?>