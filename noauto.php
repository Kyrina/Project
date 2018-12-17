<?php
session_start();
unset($_SESSION['logged_user']);
header("Location: http://localhost/Kyrina/index.php");
?>