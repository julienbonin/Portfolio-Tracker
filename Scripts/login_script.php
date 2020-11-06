<?php
include "db_connection.php";

$email = $_POST['email'];
$input_password = $_POST['password'];
$true_password = '';
$userID = '';

# TODO: Based on User email and Password, authenticate the user
#       Make SQL query for email and match passwords.


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
    // Do something for incorrect password
    print('Something went wrong');
}


/* Psudo Code
if (sql query returns no results) {
    print error message for user email incorrect or user not exist.
}
else if ($input_password != $true_password) {
    print error for incorrect password. 
}
else {
    redirect to homepage, passing $userID
    header("Location: /include/homepage.php?userID=$userID");
}


*/
//header("Location: /include/homepage.php?userID=$userID");




?>