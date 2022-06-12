<?php
// Connecting to the Database of localhost
$servername = "localhost";
$username = "root";
$password = "";
$database = "maanbank";

// Create a connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
$insert = false;
