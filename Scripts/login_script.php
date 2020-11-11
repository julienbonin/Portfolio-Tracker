<?php
include "db_connection.php";

$email = $_POST['email'];
$input_password = $_POST['password'];
$true_password = '';
$userID = '';

$sql = "SELECT * FROM `PortfolioTracker`.`Users` WHERE `Users`.`Email`='$email'";
$result = $conn->query($sql); // Returns result of query
if ($result) {
    $row = $result->fetch_row();
    $userID = $row[0];
    $true_password = $row[4];
  } else {
    print("Nothing in query");
  }

if ($input_password == $true_password) {
    header("Location: /include/homepage.php?userID=$userID");
} else {
    print('Incorrect Password!'); 
}
?>