<?php


    include '../../../inc/dbConnection.php';
    $conn = getDatabaseConnection("c9");

    $email = $_GET["email"];
    $points = $_GET["points"];
    
    $record = array();
    
    $np[":email"] = $email;
    
    $sql = "SELECT score,taken FROM quiz WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $record["taken"] += 1;
    
    $sql = "UPDATE quiz SET score = :points , taken = :took WHERE email = :email";
    
    $np[":points"] = $points;
    $np[":took"] = $record["taken"];

    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    
    
    echo json_encode($record);
?>