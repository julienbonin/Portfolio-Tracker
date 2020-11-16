<?php
include "db_connection.php";

$userID = $_POST['userID'];
$ticker = $_POST['ticker'];
$numShares = $_POST['numShares'];
$sharePrice = $_POST['sharePrice'];

$sql = "INSERT INTO `PortfolioTracker`.`UserData`
(`ID`,
`Ticker`,
`NumberOfShares`,
`PricePaidPerShare`
)
VALUES
('$userID',
'$ticker',
'$numShares',
'$sharePrice'
)";

if ($conn->query($sql) == True) {
    print("Connection Done");
    header("Location: /include/homepage.php?userID=$userID");
    
    // Only update the log is the query was successful
    $sqlLog = "INSERT INTO `PortfolioTracker`.`Logs` 
    (`ID`, `Change`, `Date`, `Ticker`, `NumberOfShares`, `PricePaidPerShare`)
    VALUES ('$userID', 'AddStock', NOW(), '$ticker', '$numShares', '$sharePrice');";
    if ($conn->query($sqlLog) == True) {
        print("Log Updated");
    } else { print("Log could not be updated."); }
} else {
    print("Something went wrong!");
}

?>
