<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sql_tutorial";

    // connection database
    $conn = new mysqli($servername,$username,$password,$dbname);

    // error handling
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>