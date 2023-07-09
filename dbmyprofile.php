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


    //querying for the username
    $sqlUsername = "SELECT userName FROM user";

    //retrieving the result set
    $result = $conn->query($sqlUsername);

    //checking if the user input matches the data in the database
    if ($result->num_rows > 0) {
        while ($dataRow = $result->fetch_assoc()) {
            $username = $dataRow['userName'];        
        }
    }

    //closing the connection
    $conn->close();

?>


<!--displaying the username-->
<span><?php echo $username?></span>