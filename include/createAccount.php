<!DOCTYPE html>
<html>
    <head>
        <title>Create Account</title>
        <link rel='stylesheet' href='/CSS/createAccount.css'>
    </head>
    <body>

        <div id='Content'>
            <div id='Create_Account_Form'>
                <form>
                    <div><input type='text' placeholder='First Name' required></div>
                    <div><input type='text' placeholder='Last Name' required></div>
                   <div><input type='text' placeholder='Email' required></div>
                   <div><input type='password' placeholder='Enter a password' required></div>
                   <div><input type='password' placeholder='Verify your password' required></div>
                   <div><button type='submit'>Submit</button></div>
             </form>
            </div>
            <div id='verification_checklist'>
                <div><img src='/img/GreyCheck.png'><p>at least 8 characters</p></div>
                <div><img src='/img/GreyCheck.png'><p>at least 1 uppercase</p></div>
                <div><img src='/img/GreyCheck.png'><p>at least 1 number</p></div>
                <div><img src='/img/GreyCheck.png'><p>at least 1 special symbol</p></div>
                <div><img src='/img/GreyCheck.png'><p>password match</p></div>
            </div>

            <h5><a href='/include/login.php'>Go To Login</a></h5>

        </div>

    </body>
</html>