<!DOCTYPE html>
<html>
    <head>
        <title>Create Account</title>
        <link rel='stylesheet' href='/CSS/createAccount.css'>
        <script src="/Scripts/scripts.js"></script>
    </head>
    <body>

        <div id='Content'>
            <div id='Create_Account_Form'>
                <form action='/Scripts/create_script.php' method='POST'>
                    <div><input type='text' placeholder='First Name' name='firstName' required></div>
                    <div><input type='text' placeholder='Last Name' name='lastName' required></div>
                   <div><input type='text' placeholder='Email' name='email' required></div>
                   <div><input id='password' onkeyup='validate()' name='password' type='password' placeholder='Enter a password' required></div>
                   <div><input id='password_verify' onkeyup='validate()' name='password_verify' type='password' placeholder='Verify your password' required></div>
                   <div><button id='button' type='submit'>Submit</button></div>
             </form>
            </div>
            <div id='verification_checklist'>
                <div><img id='img1' src='/img/GreyCheck.png'><p>at least 8 characters</p></div>
                <div><img id='img2' src='/img/GreyCheck.png'><p>at least 1 uppercase</p></div>
                <div><img id='img3' src='/img/GreyCheck.png'><p>at least 1 number</p></div>
                <div><img id='img4' src='/img/GreyCheck.png'><p>at least 1 special symbol</p></div>
                <div><img id='img5' src='/img/GreyCheck.png'><p>password match</p></div>
            </div>

            <h5><a href='/include/login.php'>Go To Login</a></h5>

        </div>

    </body>
</html>