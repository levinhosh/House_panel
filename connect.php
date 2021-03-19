<?php


$servername = "localhost";
$username = "levin";
$dbname = "rent";
$password = "1234567890";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>