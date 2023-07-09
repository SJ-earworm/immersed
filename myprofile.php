<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Profile</title>

        <!--css stylesheet-->
        <link rel="stylesheet" href="stylesheet.css">

        <!--imported icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="wrapper">
            <!--website logo-->
            <div id="logo">immersed</div>

            <!--settings button: imported-->
            <div class="settings-container">
                <!--<div class="settings-dropdown-pos">-->
                <button onclick="settingsClickFunction()" class="settings">
                    <i class="fa fa-gear"></i>
                    <span class="settings-title">settings</span>
                </button>
                <div class="settings-dropdown-pos">
                    <div id="clickDropdown" class="settings-dropdown-content">
                        <a href="login.php">log out</a>
                    </div>
                </div>
            </div>
        </div>

       <!--nav bar-->
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="read.php">Read</a>
            <a href="writeyourstory.php">Write Your Story</a>
            <a href="help.php">Help</a>
            <a href="myprofile.php" class="active">My Profile</a>
        </nav>


        <!--main content-->
        <div class="wrapper" style="justify-content: center; margin: 7% 0;">
            <div class="profile-pic-container">
                <img src="profile pic.jpg" alt="insert profile picture" class="profile-pic">
            </div>
            <div>
                <!--displaying user's info from the database-->
                <div id="username" style="font-size: 50px; padding-top: 29px; padding-left: 25px;">
                    <?php include 'dbmyprofile.php'; ?> <!--user's displayed name here-->
                </div> 
                <div id="account-type" style="font-size: 20px; padding-left: 28px; padding-top: 9px">@usernamehere</div> <!--user's username here-->
            </div>

            <!--allowing user to edit profile details-->
            <a href="">
                <button class="button" style="margin: 50% 50%;">Edit</button>
            </a>
        </div>


        <!--user's original stories-->
        <h2>My Stories</h2>
        <div class="profile-book-container">
            <a href="">
                <button>
                    <img src="insert book here.png" alt="insert book here" width="150" height="200">
                </button>
            </a>
        </div>
        
        <!--user's favourited books-->
        <h2>My Favourites</h2>
        <div class="profile-book-container">
            <a href=""> <!--link to the book here pls-->
                <button>
                    <img src="insert book here.png" alt="insert book here" width="150" height="200">
                </button>
            </a><br/><br/>
        </div>

        <!--user's read later list-->
        <h2>Read Later</h2>
        <div class="profile-book-container">
            <a href="">
                <button>
                    <img src="insert book here.png" alt="insert book here" width="150" height="200">
                </button>
            </a>
        </div>



        <!--javascript-->
        <script src="myScript.js"></script>
    </body>
</html>