<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <a href="read.php" class="active">Read</a>
            <a href="writeyourstory.php">Write Your Story</a>
            <a href="help.php">Help</a>
            <a href="myprofile.php">My Profile</a>
        </nav>


        <!--main content-->
        <div class="book-search-container">
            <div class="book-search">
                <!--<form id="book-search-form">-->
                    <i class="fa fa-search"></i>
                    <input type="text" id="search-query" placeholder="What do you feel like reading today?" autocomplete="off">
                    <button id="search-button" class="button">Search</button>
                <!--</form>-->
            </div>
        </div>

        <!--displaying the search results-->
        <div id="search-results"></div>


        <!--genre selection-->
        <div class="genre-selection-container">
            <a href="romance.php">
                <button class="genre-selection">
                    <h2>Romance</h2>
                </button>
            </a>

            <a href="comedy.php">
                <button class="genre-selection">
                    <h2>Comedy</h2>
                </button>
            </a>
            
            <a href="scifi.php">
                <button class="genre-selection">
                    <h2>Sci-Fi</h2>
                </button>
            </a>

            <a href="fantasy.php">
                <button class="genre-selection">
                    <h2>Fantasy</h2>
                </button>
            </a>

            <a href="mystery.php">
                <button class="genre-selection">
                    <h2>Mystery</h2>
                </button>
            </a>

            <a href="other.php">
                <button class="genre-selection">
                    <h2>Other</h2>
                </button>
            </a>
        </div>



        <!--javascript-->
        <script src="myScript.js"></script>
        <script>
            //variables
            const searchInput = document.getElementById('search-query');
            const searchButton = document.getElementById('search-button');
            const searchResults = document.getElementById('search-results');

            //event listener to listen to the click on the search button
            searchButton.addEventListener('click', bookSearch);

            //function to query for the book
            function bookSearch() {
                const searchQuery = searchInput.value;

                if (searchQuery.trim() === '') {
                    searchResults.innerHTML = '<p>Please search for a book.</p>';
                    return;
                }

                
                const apiKey = 'AIzaSyABwU0CFKVydyaZbI76gCT9HtErrCWgvoM'; //come back with ur key mem
                const queryURL = `https://www.googleapis.com/books/v1/volumes?q=${encodeURIComponent(searchQuery)}+inauthor&filter=full&key=${apiKey}`;

                fetch(queryURL)
                    .then(response => response.json())
                    .then(data => displayResults(data))
                    .catch(error => {
                        console.log(error)
                        searchResults.innerHTML = '<p>An error occured while fetching the results</p>'
                    });
            }


            //function to display the search results
            function displayResults(data) {
                //empty text on default
                searchResults.innerHTML = '';

                //indicate if search not found
                if(data.totalItems === 0) {
                    searchResults.innerHTML = '<p>No results found</p>';
                    return;
                }

                //displaying the books
                data.items.forEach(book => {
                    const title = book.volumeInfo.title;
                    const authors = book.volumeInfo.authors ? book.volumeInfo.authors.join(', ') : 'Unknown';
                    const description = book.volumeInfo.description || 'No description available';
                    const coverPhoto = book.volumeInfo.imageLinks ? book.volumeInfo.imageLinks.thumbnail : '';

                    const bookResult = document.createElement('div');
                    bookResult.innerHTML = `
                        <h3>${title}</h3>
                        <p>Authors: ${authors}</p>
                        <p>Description: ${description}</p>
                        <img src="${coverPhoto}" alt="${title} thumbnail"><br/><br/>
                        <button class="button" onclick="openBook('${getVolumeID(book)}')">Read</button><br/><br/>
                    `;
                        
                    searchResults.appendChild(bookResult);
                });

            }


            //function to retrieve the book ISBN
            function getVolumeID(volumeInfo) {
                return volumeInfo.id || 'Could not find the volume ID';
            }


            //function to open the book in book.php
            function openBook(volumeID) {
                const url = `book.php?volumeId=${volumeID}`;
                window.location.href = url;
            }
        </script>
    </body>
</html>