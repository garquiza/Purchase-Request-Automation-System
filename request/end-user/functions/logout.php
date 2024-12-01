<?php
session_start();
session_destroy();
header("Location: /request/end-user/login.php");
exit();
?>