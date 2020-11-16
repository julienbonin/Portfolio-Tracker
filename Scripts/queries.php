<?php


// 1: Create Account Query
"INSERT INTO `PortfolioTracker`.`Users` (`FirstName`, `LastName`, `Email`, `Password`) VALUES ('$firstName', '$lastName', '$email', '$password')";


// 2: Delete User Account
"DELETE FROM `PortfolioTracker`.`Users` WHERE `Users`.`ID` = '$userID'";


// 3: Updata User Name
"UPDATE `PortfolioTracker`.`Users` SET `FirstName`='$firstName' WHERE `Users`.`ID`='$userID'";


// 4: Log queries for security
// Adding user
"SELECT `ID` FROM `PortfolioTracker`.`Users` WHERE `Users`.`Email`='$email';";
"INSERT INTO `PortfolioTracker`.`Logs` (`ID`, `Change`, `Date`) VALUES ('$userID', 'CreateUser', NOW());";

// Editing user info
// Edit First Name
"SELECT `FirstName` FROM `PortfolioTracker`.`Users` WHERE `Users`.`ID`='$userID';";
"INSERT INTO `PortfolioTracker`.`Logs` (`ID`, `Change`, `Date`, `OldInfo`, `NewInfo`) VALUES
    ('$userID', 'InfoChange', NOW(), '$firstName', '$oldFirstName');";

// Edit Last Name
"SELECT `LastName` FROM `PortfolioTracker`.`Users` WHERE `Users`.`ID`='$userID';";
"INSERT INTO `PortfolioTracker`.`Logs` (`ID`, `Change`, `Date`, `OldInfo`, `NewInfo`) VALUES
    ('$userID', 'InfoChange', NOW(), '$lastName', '$oldLastName');";

// Edit Email Name
"SELECT `Email` FROM `PortfolioTracker`.`Users` WHERE `Users`.`ID`='$userID';";
"INSERT INTO `PortfolioTracker`.`Logs` (`ID`, `Change`, `Date`, `OldInfo`, `NewInfo`) VALUES
    ('$userID', 'InfoChange', NOW(), '$email', '$oldEmail');";

// Delete User account
"INSERT INTO `PortfolioTracker`.`Logs` (`ID`, `Change`, `Date`) VALUES ('$userID', 'DeleteUser', NOW());";





// Add User Stocks Query - Can remove
$sql = "INSERT INTO `PortfolioTracker`.`UserData` (`ID`, `Ticker`, `NumberOfShares`, `PricePaidPerShare`) VALUES ('$userID', '$ticker', '$numShares', '$sharePrice')";



?>








