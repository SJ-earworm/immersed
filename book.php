<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title> <!--book title here-->

        <!--css stylesheet-->
        <link rel="stylesheet" href="stylesheet.css">
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
        
        <!--displaying the book using the Google Books Embedded Viewer API-->
            <div id="viewer-canvas" style="width: 900px; height: 1080px;"></div>





        <!--javascript-->
        <script src="myScript.js"></script>

        <!--loading the Google Books embedded viewer API-->
        <script type="text/javascript" src="https://www.google.com/books/jsapi.js"></script>

        <script>
            //extracting the book ISBN from the url
            const urlParam = new URLSearchParams(window.location.search);
            const volumeID = urlParam.get('volumeId');

            //loading the book
            google.books.load();

            function initialise() {
                const viewer = new google.books.DefaultViewer(document.getElementById('viewer-canvas'));
                viewer.load(volumeID);
            }

            google.books.setOnLoadCallback(initialise);
        </script>
    </body>
</html>