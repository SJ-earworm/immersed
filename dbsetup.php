<?php
    //declaring the server details variables
    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "";

    //estasblishing connection
    $conn = new mysqli($dbServer, $dbUsername, $dbPassword);

    //validate the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //create the database
    $sql = "CREATE DATABASE IF NOT EXISTS `immersed_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully <br/>";
    }
    else {
        echo "Error creating database: " . $conn->error;
    }


    //selecting this database to access
    $conn->select_db("immersed_db");
    

    //creating the tables
    //user table
    $sql = "CREATE TABLE IF NOT EXISTS `user` (
        `userID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `userName` varchar(50) NOT NULL,
        `email` varchar(50) NOT NULL,
        `password` varchar(255) NOT NULL,
        `accountType` varchar(20) DEFAULT NULL,
        `myStories` varchar(255) DEFAULT NULL,
        `myFavourites` varchar(255) DEFAULT NULL,
        `readLater` varchar(255) DEFAULT NULL,
        FOREIGN KEY (`accountType`) REFERENCES `user_view` (`accountType`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

    //table creation validation
    if ($conn->query($sql) === TRUE) {
        echo "Table 'user' created successfully <br/>";
    }
    else {
        echo "Error creating table 'user': " . $conn->error;
    }




    //user's account type table
    $sql = "CREATE TABLE IF NOT EXISTS `user_view` (
        `accountType` varchar(20) PRIMARY KEY,
        `bookAccessType` varchar(20) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

    //table creation validation
    if ($conn->query($sql) === TRUE) {
        echo "Table 'user_view' created successfully <br/>";
    }
    else {
        echo "Error creating table 'user_view': " . $conn->error;
    }




    //books table
    /*$sql = "CREATE TABLE IF NOT EXISTS `books` (
        `ISBNcode` varchar(20) NOT NULL PRIMARY KEY,
        `genre` varchar(20) NOT NULL,
        `title` varchar(20) NOT NULL,
        `author` varchar(20) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

    //table creation validation
    if ($conn->query($sql) === TRUE) {
        echo "Table 'books' created successfully <br/>";
    }
    else {
        echo "Error creating table 'books': " . $conn->error;
    }*/








    //default INSERT statements e.g. for the accountType





    //closing the connection
    $conn->close();