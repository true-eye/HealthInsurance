<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    /*$username = "thehealthscout_user";
    $password = "usBHjk9LTNsj";*/

    // Create connection
    $conn = new mysqli($servername, $username, $password, '');
    // Check connection
    if ($conn->connect_error) {
        die("Connection to root failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE dbHealth";
    if ($conn->query($sql) === TRUE) {
    //    echo "Database created successfully";
    } else {
    //    echo "Error creating database: " . $conn->error;
    }
?> 