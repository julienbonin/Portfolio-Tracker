<?php

function printUserName($id) {
    include "db_connection.php"; 
    $sql = "SELECT FirstName,LastName FROM `PortfolioTracker`.`Users` WHERE `Users`.`ID`='$id'";
    $result = $conn->query($sql);
    if ($result) {
        $row = $result->fetch_row();
        $firstName = $row[0];
        $lastName = $row[1];
        echo $firstName." ",$lastName;
      } else {
        print("Nothing in query");
      }
}

// Don't think we need this
/*
function login() {
    $email = $_POST['email'];
    $input_password = $_POST['password'];
    header("Location: /include/homepage.php?userID=$email");
}
*/

function getUserStocks($userID) {
    # Access db, get user stocks and for each entry, loop and create html entry to display that stock
    include "db_connection.php"; 
    $htmlString = "";

    $sql = "SELECT * FROM `PortfolioTracker`.`UserData` WHERE `UserData`.`ID`='$userID'";
    $result = $conn->query($sql);
    $numRows = $result->num_rows;
    if ($result) {
        for ($n=0;$n<$numRows;$n++) {
            $row = $result->fetch_row();
            $ticker = $row[1];
            $sql = "SELECT CompanyName, CurrentPrice FROM `PortfolioTracker`.`SupportedStocks` WHERE `SupportedStocks`.`Ticker`='$ticker'";
            $res = $conn->query($sql);
            $companyName = "";
            if ($res) {
                $res_row = $res->fetch_row();
                $companyName = $res_row[0];
                $currentPrice = $res_row[1];
            }

            $numShares = $row[2];
            $pricePaid = $row[3];
    
            $currentReturn = ($currentPrice-$pricePaid)*$numShares;
            $newString = 
            "   <div>
                    <h1>$companyName</h1>
                    <h2>Number Of Shares: $numShares</h2>
                    <h2>Price Purchase Per Share: $pricePaid</h2>
                    <h2>Current Return: $currentReturn</h2>
                </div>
            ";

            $htmlString = $htmlString.$newString;
        }
      } else {
        print("Nothing in query");
      }

      echo $htmlString;

}




?>



