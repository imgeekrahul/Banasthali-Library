<?php
session_start();


session_unset($_SESSION['user']);
session_destroy();
include("Login.php");
?>
