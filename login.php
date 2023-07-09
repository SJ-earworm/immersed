<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log In</title>

        <!--css stylesheet-->
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <!--website logo-->
        <div id="logo-login-signup">immersed</div>

        <h1 style="text-align: center; margin-top: 30px;">Log in to your account</h1>
        <form class="form-container" action="dblogin.php" method="POST" autocomplete="off">
            <input type="email" name="email" placeholder="Email"><br/><br/>
            <input type="password" name="password" placeholder="Password"><br/><br/>
            <button type="submit" class="button" style="margin: 8px 0;">Submit</button>
        </form>

        <!--allow user to access sign up page-->
        <a href="signup.php" class="sign-in-up">Sign up for an account</a>

        <!--do reset password if you can-->
    </body>
</html>