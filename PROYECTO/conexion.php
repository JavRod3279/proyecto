<?php

$servername = "localhost";
$database = "matissestfa";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " .$conn->connect_error());
}
//echo "Connected successfully";

?>