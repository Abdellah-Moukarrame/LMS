<?php
session_start();
session_unset();
session_destroy();
header("location:login.php");

if (!isset($_SESSION['user_id'])) {
     header("location:login.php");
     exit;
}
if (!isset($_SESSION['email_admin'] ) && !isset($_SESSION['password_admin']) ) {
    header("location: login.php");
    exit;
}
?>