<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: /request/admin/login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
?>