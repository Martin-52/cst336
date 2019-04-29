<?php

    include '../../../inc/dbConnection.php';
    $conn = getDatabaseConnection("c9");
    
    $email = $_GET["email"];
    
    $previous = array();
    
    $sql = "SELECT * FROM quiz WHERE email = :email";
    
    $np = array();
    $np[":email"] = $email;
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    
     $user = $stmt->fetch(PDO::FETCH_ASSOC);
     echo json_encode($user);


?>