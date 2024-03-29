<?php
    //declaring the server details variables
    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "immersed_db";

    //establishing connection
    $conn = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

    //validate the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    //user variables
    $email = $_POST['email'];
    $enteredPassword = $_POST['password'];



    //when user logs into their account
    $sqlLogin = "SELECT email, password FROM user";

    //preparing a statement & binding user input to $username & $email
    $pst = $conn->prepare($sqlLogin);
    $pst->bind_param("ss", $email, $enteredPassword);

    //executing the statement
    $pst->execute();

    //retrieving the result set
    $result = $pst->get_result();

    //checking if the user input matches the data in the database
    if ($result->num_rows > 0) {
        while ($dataRow = $result->fetch_assoc()) {
            $checkEmail = $dataRow["email"];
            $checkHashedPass = $dataRow["password"];  //retrieving the hashed password from the database

            //direct the user to the home page if success, else ask user to try again
            if ($email == $checkEmail && password_verify($enteredPassword, $checkHashedPass)) { //comparing input with the hashed password
                header("Location: home.php");
                echo 'Data inserted into database';
            }
            else {
                header('login.php');
                echo 'Incorrect username or password. Please try again.';
            }
        
        }
    }


    //closing the connection
    $conn->close();