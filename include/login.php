<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel='stylesheet' href='/CSS/login.css'>
        <?php include '../Scripts/scripts.php'; ?>
    </head>
    <body>

        <div id='Content'>
            <form id='Login_Form' action="../Scripts/login.php" method='POST'>
                <input type='text' placeholder='Email' name='email' required>
                <input type='password' placeholder='Password' name='password' required>
                <button type='submit'>Submit</button>
            </form>
            <h5><a href='/include/createAccount.php'>Create Account</a></h5>
        </div>
    </body>
</html>