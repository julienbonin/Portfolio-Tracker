<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel='stylesheet' href='/CSS/homepage.css'>
        <?php $userID=$_GET['userID']; include '../Scripts/homepage_script.php'; ?>
        <script src="/Scripts/scripts.js"></script>
    </head>
    <body>
      
      <header> 
        <div id='UserName'><h1><?php printUserName($userID);?></h1></div>
        <div id='ManagePortfolioButton'><button type='submit' onclick='toggleManagePorfolioView()'>Manage Porfolio</button></div> 
        <div id='AccountEditButton'><button type='submit' onclick='toggleAccountEditView()'>Account Edit</button></div>
      </header>

      <div id='ManagePortfolioSection'>
        <form action='/Scripts/add_user_stock.php' method='POST'>
          <input type='hidden' value='<?php echo $userID; ?>' name='userID'>
          <div id='tickerSymbolInput'><input type='text' name='ticker' placeholder='Ticker Symbol'><br></div>
          <div id='numberOfSharesInput'><input type='text' name='numShares' placeholder='Number of Shares'><br></div>
          <div id='PricePerShareInput'><input type='text' name='sharePrice' placeholder='Price Per Share'><br></div>
          <div><button type='submit'>Submit</button></div>
        </form>
      </div>

      <div id='AccountEditSection'>
        <form action='/Scripts/edit_user_info.php' method='POST'>
          <input type='hidden' value='<?php echo $userID; ?>' name='userID'>
          <div id='FirstNameInput'><input type='text' name='FirstName' placeholder='First Name'><br></div>
          <div id='LastNameInput'><input type='text' name='LastName' placeholder='Last Name'><br></div>
          <div id='EmailInput'><input type='text' name='Email' placeholder='Email'><br></div>
          <div><button type='submit'>Submit</button></div>
        </form>
      </div>

      <div id='Content'>
          <?php getUserStocks($userID); ?>
      </div>

    </body>
</html>