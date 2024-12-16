<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'request_db';

try {
    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        throw new Exception('Connection failed: ' . $conn->connect_error);
    }
    $conn->set_charset('utf8');
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
