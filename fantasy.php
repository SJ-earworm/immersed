<!DOCTYPE html>
<html>
    <head>
        <title>Browse Categories</title>

        <!--css stylesheet-->
        <link rel="stylesheet" href="stylesheet.css">

        <!--google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,500&display=swap" rel="stylesheet">

        <!--imported icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class="wrapper">
            <!--website logo-->
            <div id="logo">immersed</div>

            <!--settings button: imported-->
            <div class="wrapper">
                <div class="settings-container">
                    <button class="settings">
                        <i class="fa fa-gear"><span class="settings-title">settings</span></i>
                    </button>
                </div>
            </div>
        </div>

        <!--nav bar-->
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="read.php" class="active">Read</a>
            <a href="writeyourstory.php">Write Your Story</a>
            <a href="help.php">Help</a>
            <a href="myprofile.php">My Profile</a>
        </nav>


        <!--main content-->
        <div class="book-search-container">
            <div class="book-search">
                <i class="fa fa-search book-search-icon"></i>
                <input type="text" 
                       placeholder="What do you feel like reading today?">
            </div>
        </div>


        <div>
            <h2>Fantasy</h2>
            <!--clikable book button-->
            <a href="">
                <button>
                    <img src="insert book here.png" alt="insert book here" width="150" height="200">
                </button>
            </a>
        </div>
    </body>
</html>