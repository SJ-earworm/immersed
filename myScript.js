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


//validating if 'confirm password' value matches the password?
