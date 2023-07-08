<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Write Your Story</title>

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
            <a href="read.php">Read</a>
            <a href="writeyourstory.php" class="active">Write Your Story</a>
            <a href="help.php">Help</a>
            <a href="myprofile.php">My Profile</a>
        </nav>


        <!--main content-->
        <h1>Write Your Story</h1>
        <!--starting new book-->
        <div class="wrapper">
            <a href="editor.php">
                <button class="book-button">Start a new book +</button>
            </a>

            <!--editing existing book-->
            <a href="">
                <button>
                    <img src="insert book here.png" alt="insert book here" width="150" height="200">
                </button>
            </a>
        </div>
    </body>
</html>