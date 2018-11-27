<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'efoodie';

    // connect to the database
    $db = mysqli_connect($server, $user, $password, $dbname);

    if ($db) {
        // echo "Connection succesfull";
    } else {
        echo "Failed to connect to MySQL Database: " . mysqli_connect_error();
    }

?>