<?php
$servername = "localhost";
$username = "root"; // adjust according to your database settings
$password = "";     // adjust according to your database settings
$dbname = "skill";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
