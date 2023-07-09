<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create your masterpiece</title>

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
            <a href="writeyourstory.php" class="active">Write Your Story</a>
            <a href="help.php">Help</a>
            <a href="myprofile.php">My Profile</a>
        </nav>


        <!--main content-->
        <!--allowing users to upload cover image-->
        <h3>Upload cover image</h3>
        <!--styling the file upload button-->
        <input type="file" name="img" id="coverimg" accept="image/*">
        <label for="coverimg">
            Choose a photo
        </label>

        <!--allowing users to write their story-->
        <div>
            <textarea name="story" placeholder="Create your masterpiece"></textarea>
        </div>

        <!--uploading or drafting their story-->
        <a href="">
            <button type="submit" class="button">Upload</button>
        </a> &nbsp;&nbsp;
        <a href="">
            <button type="submit" class="button">Save to drafts</button>
        </a>




        <!--javascript-->
        <script src="myScript.js"></script>
    </body>
</html>