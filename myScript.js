//settings button
//toggle 'reveal-settings-dropdown' when user clicks the settings button
function settingsClickFunction(){
    document.getElementById('clickDropdown').classList.toggle('reveal-settings-dropdown');
}




//signup.html password validation
var password = document.getElementById('psw');
var lowerCase = document.getElementById('lowerC');
var upperCase = document.getElementById('upperC');
var number = document.getElementById('number');
var length = document.getElementById('length');

//when user clicks on password field
password.onfocus = function() {
    document.getElementById('password-criteria').style.display = 'table';
}

//when user clicks out of the password field
password.onblur = function() {
    document.getElementById('password-criteria').style.display = 'none';
}


//when user is typing into the password field
password.onkeyup = function() {
    //validating lower case letters
    var lowerCaseCheck = /[a-z]/g;

    if (password.value.match(lowerCaseCheck)) {
        lowerCase.classList.remove('invalid');
        lowerCase.classList.add('valid');
    }
    else {
        lowerCase.classList.add('invalid');
        lowerCase.classList.remove('valid');
    }


    //validating upper case letters
    var upperCaseCheck = /[A-Z]/g;

    if (password.value.match(upperCaseCheck)) {
        upperCase.classList.remove('invalid');
        upperCase.classList.add('valid');
    }
    else {
        upperCase.classList.add('invalid');
        upperCase.classList.remove('valid');
    }


    //validating numbers
    var numberCheck = /[0-9]/g;

    if (password.value.match(numberCheck)) {
        number.classList.remove('invalid');
        number.classList.add('valid');
    }
    else {
        number.classList.add('invalid');
        number.classList.remove('valid');
    }


    //validating input length
    if (password.value.length >= 8) {
        length.classList.remove('invalid');
        length.classList.add('valid');
    }
    else {
        length.classList.add('invalid');
        length.classList.remove('valid');
    }
}








//Google API search results
//adding an event listener to ensure DOM is fully loaded before executing the below codes
//document.addEventListener('DOMContentLoaded', function() {

    /*const searchInput = document.getElementById('search-query');
    const searchButton = document.getElementById('search-button');
    const searchResults = document.getElementById('search-results');

    searchButton.addEventListener('click', bookSearch);

    function bookSearch() {
        const searchQuery = searchInput.value;

        if (searchQuery.trim() === '') {
            searchResults.innerHTML = '<p>Please search for a book.</p>';
            return;
        }

        
        const apiKey = 'AIzaSyABwU0CFKVydyaZbI76gCT9HtErrCWgvoM'; //come back with ur key mem
        const queryURL = `https://www.googleapis.com/books/v1/volumes?q=${encodeURIComponent(searchQuery)}&filter=free-ebooks&key=${apiKey}`;

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
        console.log(data);
        
        searchResults.innerHTML = '';

        //display results if found
        if(data.totalItems === 0) {
            searchResults.innerHTML = '<p>No results found</p>';
            return;
        }

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
                <img src="${coverPhoto}" alt="${title} thumbnail">
            `;
                
            searchResults.appendChild(bookResult);
        });

    }*/


    