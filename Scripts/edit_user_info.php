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
    // Get old first name for records
    $logsql = "SELECT `FirstName` FROM `PortfolioTracker`.`Users` WHERE `Users`.`ID`='$userID';";
    $oldFirstName = $conn->query($logsql); // Gives old first name
    
    $sql = "UPDATE `PortfolioTracker`.`Users` SET `FirstName`='$firstName' WHERE `Users`.`ID`='$userID'";
    $result = $conn->query($sql); // Returns result of query
    if ($result) {
        $firstNameUpdated = true;
        
        // Only update Logs if query successful
        $log = "INSERT INTO `PortfolioTracker`.`Logs` (`ID`, `Change`, `Date`, `OldInfo`, `NewInfo`) VALUES
                ('$userID', 'FirstNameChange', NOW(), '$firstName', '$oldFirstName');";
        $conn->query($log);
    } 
} else {
    $firstNameUpdated = true;
}


if (strlen($lastName) > 0) {
    // Get old last name for records
    $logsql = "SELECT `LastName` FROM `PortfolioTracker`.`Users` WHERE `Users`.`ID`='$userID';";
    $oldLastName = $conn->query($logsql); // Gives old last name
    
    $sql = "UPDATE `PortfolioTracker`.`Users` SET `LastName`='$lastName' WHERE `Users`.`ID`='$userID'";
    $result = $conn->query($sql); // Returns result of query
    if ($result) {
        $lastNameUpdated = true;
        
        // Only update log is query successful
        $log = "INSERT INTO `PortfolioTracker`.`Logs` (`ID`, `Change`, `Date`, `OldInfo`, `NewInfo`) VALUES
                ('$userID', 'LastNameChange', NOW(), '$lastName', '$oldLastName');";
        $conn->query($log);
    } 
} else {
    $lastNameUpdated = true;
}


if (strlen($email) > 0) {
    // Get old email for records
    $logsql = "SELECT `Email` FROM `PortfolioTracker`.`Users` WHERE `Users`.`ID`='$userID';";
    $oldEmail = $conn->query($logsql); // Gives old email
    
    $sql = "UPDATE `PortfolioTracker`.`Users` SET `Email`='$email' WHERE `Users`.`ID`='$userID'";
    $result = $conn->query($sql); // Returns result of query
    if ($result) {
        $emailUpdated = true;
        
        // Only update log is query successful
        $log = "INSERT INTO `PortfolioTracker`.`Logs` (`ID`, `Change`, `Date`, `OldInfo`, `NewInfo`) VALUES
                ('$userID', 'EmailChange', NOW(), '$email', '$oldEmail');";
        $conn->query($log);
    } 
} else {
    $emailUpdated = true;
}


if ($firstNameUpdated && $lastNameUpdated && $emailUpdated) {
    header("Location: /include/homepage.php?userID=$userID");
}



?>
