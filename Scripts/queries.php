<?php


// 1: Create Account Query
"INSERT INTO `PortfolioTracker`.`Users` (`FirstName`, `LastName`, `Email`, `Password`) VALUES ('$firstName', '$lastName', '$email', '$password')";


// 2: Delete User Account
"DELETE FROM `PortfolioTracker`.`Users` WHERE `Users`.`ID` = '$userID'";


// 3: Updata User Name
"UPDATE `PortfolioTracker`.`Users` SET `FirstName`='$firstName' WHERE `Users`.`ID`='$userID'";


// Something with security here?







// Add User Stocks Query - Can remove
$sql = "INSERT INTO `PortfolioTracker`.`UserData` (`ID`, `Ticker`, `NumberOfShares`, `PricePaidPerShare`) VALUES ('$userID', '$ticker', '$numShares', '$sharePrice')";



?>








