<?php 

include "db_connection.php";

$userID = $_POST['userID'];

$sql = "DELETE FROM `PortfolioTracker`.`Users` WHERE `Users`.`ID` = '$userID'";

//$sql2 = "DELETE FROM `PortfolioTracker`.`UserData` WHERE `UserData`.`ID` = '$userID'";

$result = $conn->query($sql); // Returns result of query
if ($result) {
    $result = $conn->query($sql2);
    header("Location: /index.html");
    //if ($result) { 
    //    header("Location: /index.html");
    //}
} else {
    print("Operation could not be completed");
    print(mysqli_error($conn));
}
?>