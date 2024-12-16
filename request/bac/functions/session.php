<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /request/bac/login.php");
    exit();
}
?>
