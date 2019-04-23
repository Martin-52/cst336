<?php

    include '../../../inc/dbConnection.php';
    $conn = getDatabaseConnection("pokemon");
    
    $sql = "SELECT * FROM pokedex ORDER BY RAND() LIMIT 1";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $pokemon = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($pokemon);

?>