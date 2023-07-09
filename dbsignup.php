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
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //hashing the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    //when user creates new account
    //inserting user input into database
    $sqlNewAccount = "INSERT INTO user (userName, email, password) VALUES ('$username', '$email', '$hashedPassword');";
    //vallidation
    if ($conn->query($sqlNewAccount) === TRUE) {
        echo 'Data inserted successfully <br/>';

        header("Location: home.php");
    }
    else {
        echo "Error inserting data: " . $conn->error;
    }