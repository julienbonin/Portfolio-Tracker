<?php

$email = $_POST['email'];
$input_password = $_POST['password'];

# TODO: Based on User email and Password, authenticate the user
#       Make SQL query for email and match passwords.

$sql = ''; # Some quiery from authenticate to get ID, and password based on email.

$true_password = ''; # query[2]
$userID = ''; # query[0]


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
header("Location: /include/homepage.php?userID=$userID");




?>