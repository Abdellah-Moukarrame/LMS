<?php
session_destroy();
if (session_id()==null) {
    header("location:login.php");
    exit;
}
else {
    header("location:../Client/dashboard.php");
}
?>