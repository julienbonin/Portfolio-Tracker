<?php


function printUserName($id) {
    echo $id;
    echo 'Hello World';
}


function login() {
    $email = $_POST['email'];
    $input_password = $_POST['password'];

    # Will need to make call to database to retrieve user id from password and email.

    header("Location: /include/homepage.php?userID=$email");


    # This is what I'll actually do.
    # header("Location: /include/homepage.php?userID=$ID");
}



function getUserStocks($userID) {
    # Access db, get user stocks and for each entry, loop and create html entry to display that stock


    /*
    Note:   May need to create two queries. One to fetch user stocks, the other to fetch current company
            price (maybe do in loop or all together, though altogether may not work well with code below)
    
    $sql = 'some query here';
    
    $result = $conn->query($sql);

    $htmlString = '';
    for ($n=0; $n<$numRows; $n++) {
        $row = $result->fetch_row();

        $companyName = $row[0];
        $companyTicker = $row[1]; # If we want to fetch current price from company entry
        $numShares = $row[2];
        $pricePaid = $row[3];
        $currentPrice = $row[4] or fetch from company table


        $newString = 
        '   <div>
                <h1>$companyName</h1>
                <h2>Number Of Shares: $numShares</h2>
                <h2>Price Purchase Per Share: $pricePaid</h2>
                <h2>Current Return: ($currentPrice-$pricePaid)*$num</h2>
            </div>
        ';

        $htmlString = $htmlString.$newString;



    }


    */

}




?>



