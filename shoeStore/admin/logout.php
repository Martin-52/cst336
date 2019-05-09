<?php
session_start();

unset($_SESSION['id']);
//session_destroy();
header('Location: /shoeStore/admin/login.php'); //taking user back to login screen
?>