<?php
session_start();


$_SESSION['name']="AMIT";
$_SESSION['pass']="12345";


echo $_SESSION['name'];
echo $_SESSION['pass'];
?>