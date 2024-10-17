<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "saloon_management";
    $connectionMessage = false;
    
    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
        $connectionMessage = "Connection failed: " . mysqli_connect_error();
    }
    $connectionMessage = "Connected successfully to the database!";
?>