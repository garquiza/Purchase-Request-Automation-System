<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "request_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>