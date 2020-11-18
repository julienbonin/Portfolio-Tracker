<?php 

include "db_connection.php";

$userID = $_POST['userID'];

$sql = "DELETE FROM `PortfolioTracker`.`Users` WHERE `Users`.`ID` = '$userID'";

//$sql2 = "DELETE FROM `PortfolioTracker`.`UserData` WHERE `UserData`.`ID` = '$userID'";

$result = $conn->query($sql); // Returns result of query
if ($result) {
    //$result = $conn->query($sql2);
    header("Location: /index.html");
    //if ($result) { 
    //    header("Location: /index.html");
    //}
    
    // Only update logs if query was successful
    $logsql = "INSERT INTO `PortfolioTracker`.`Logs` (`ID`, `Change`, `Date`) VALUES ('$userID', 'DeleteUser', NOW());";
    $logresult = $conn->query($logsql);
    if ($logresult) {
        print("Logs updated.");
    } else { print("Logs not updated!"); }
} else {
    print("Operation could not be completed");
    print(mysqli_error($conn));
}
?>
