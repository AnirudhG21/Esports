<?php
session_start();

// Session clear
unset($_SESSION["customer_login_id"]);
unset($_SESSION["customer_login_name"]);
unset($_SESSION["customer_login_phone"]);
unset($_SESSION["customer_login_email"]);

// destroy the session
//session_destroy();
// $page = $_GET['page'];
header('Location: index.php');
?>