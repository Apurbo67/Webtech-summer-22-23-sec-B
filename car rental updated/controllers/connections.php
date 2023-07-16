<?php

// this will create a connection to the phpmyadmin database
function connection() {
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "carrentaldb";

if($con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname));

{

    return $con;
}


}

?>


