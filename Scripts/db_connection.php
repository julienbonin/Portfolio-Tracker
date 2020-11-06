<?php

// Azure Connection
$server = "127.0.0.1";
$user = "root";
$db_Name = "PortfolioTracker";
$pw = "AXvcr9gNug";


$conn = mysqli_connect($server, $user, $pw, $db_Name);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

?>