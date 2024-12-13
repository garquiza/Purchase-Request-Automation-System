<?php
session_start();
session_unset();
session_destroy();

header("Location: /request/bac/login.php");
exit();
?>
