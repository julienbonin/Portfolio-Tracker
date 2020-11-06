<?php
header("Location: /include/login.php"); // Will redirect to login page
include "db_connection.php";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO `PortfolioTracker`.`Users`
(`FirstName`,
`LastName`,
`Email`,
`Password`)
VALUES
('$firstName',
'$lastName',
'$email',
'$password');";

if ($conn->query($sql) == True) {
  print("Connection Done");
}

?>
