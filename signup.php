<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create Your Account</title>

        <!--css stylesheet-->
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <!--establishing connection with the database-->
        <!--$conn;-->

        <!--website name-->
        <div id="logo-login-signup">immersed</div>

        <!--input user details-->
        <h1 style="text-align: center; margin-top: 30px;">Create your account</h1>
        <form align="center" action="dbsignup.php" method="POST" autocomplete="off">
            <input type="text" name="username" placeholder="Username" required><br/><br/>
            <input type="email" name="email" placeholder="Email" required><br/><br/>
            <input type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required>
            <!--password criteria-->
            <div id="password-criteria">
                <p><b>Password must meet the following criteria:</b></p>
                <p id="lowerC" class="invalid">must include a lower case letter</p>
                <p id="upperC" class="invalid">must include an upper case letter</p>
                <p id="number" class="invalid">must include a number</p>
                <p id="length" class="invalid">must be at least 8 characters long</p>
            </div><br/><br/>            
            <input type="password" id="confirm-psw" name="confirmpassword" placeholder="Confirm Password" required><br/><br/>
            <!--if repeated password does not match the first password-->
            <p id="confirm-psw-wrong"></p>

            <!--submit button-->
            <button type="submit" id="disable-if-wrong" class="button" style="margin: 8px 0;" >Submit</button>
        </form>

        <!--allow user to access sign up page-->
        <a href="login.php" class="sign-in-up">Log in to an account</a>

        <!--do reset password if you can-->


        <!--javascript-->
        <script src="myScript.js"></script>
    </body>
</html>