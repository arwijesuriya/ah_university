<?php
    $servername = "localhost";
    $username = "root"; // Default username for WAMP
    $password = ""; // Default password for WAMP (empty by default)
    $dbname = "ah_university"; // database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>