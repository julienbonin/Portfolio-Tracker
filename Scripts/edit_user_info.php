<?php 

include "db_connection.php";

$userID = $_POST['userID'];
$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$email = $_POST['Email'];

$firstNameUpdated = false;
$lastNameUpdated = false;
$emailUpdated = false;

if (strlen($firstName) > 0) {
    $sql = "UPDATE `PortfolioTracker`.`Users` SET `FirstName`='$firstName' WHERE `Users`.`ID`='$userID'";
    $result = $conn->query($sql); // Returns result of query
    if ($result) {
        $firstNameUpdated = true;
    } 
} else {
    $firstNameUpdated = true;
}


if (strlen($lastName) > 0) {
    $sql = "UPDATE `PortfolioTracker`.`Users` SET `LastName`='$lastName' WHERE `Users`.`ID`='$userID'";
    $result = $conn->query($sql); // Returns result of query
    if ($result) {
        $lastNameUpdated = true;
    } 
} else {
    $lastNameUpdated = true;
}


if (strlen($email) > 0) {
    $sql = "UPDATE `PortfolioTracker`.`Users` SET `Email`='$email' WHERE `Users`.`ID`='$userID'";
    $result = $conn->query($sql); // Returns result of query
    if ($result) {
        $emailUpdated = true;
    } 
} else {
    $emailUpdated = true;
}


if ($firstNameUpdated && $lastNameUpdated && $emailUpdated) {
    header("Location: /include/homepage.php?userID=$userID");
}



?>