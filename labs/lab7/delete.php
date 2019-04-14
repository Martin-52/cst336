<?php
    
    session_start();
    
    //checks whether user has logged in
    if (!isset($_SESSION['adminName'])) {
        
        header('location: login.html'); //sends users to login screen if they haven't logged in
        
    }

    include '../../inc/dbConnection.php';
    $conn = getDatabaseConnection("ottermart");

    $sql = "DELETE FROM `om_product` WHERE `om_product`.`productId` = " . $_GET['productId'];
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header("Location: admin.php")
?>