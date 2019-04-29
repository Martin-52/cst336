<?php

    include '../../../inc/dbConnection.php';
    $conn = getDatabaseConnection("c9");
    
    $email = $_GET["email"];
    
    $sql = "INSERT INTO quiz (`email`, `score`, `taken`) VALUES (:email, 0, 0)";
    $np = array();
    $np[":email"] = $email;
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);

?>