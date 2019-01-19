<?php
    $servername = "localhost";
    $username = "root";
    $password = "rootroot";

    // Create connection
    $conn = new mysqli($servername, $username, $password, '', 8889);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE dbHealth";
    if ($conn->query($sql) === TRUE) {
    //    echo "Database created successfully";
    } else {
    //    echo "Error creating database: " . $conn->error;
    }
?> 