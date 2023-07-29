<?php

// this will create a connection to the phpmyadmin database
function connection() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "carrentaldb";

    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $con;
}

?>
