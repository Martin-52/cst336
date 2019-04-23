<?php

    include '../../../inc/dbConnection.php';
    $conn = getDatabaseConnection("pokemon");
    
    $sql = "INSERT INTO `pokedex` (`pokemon`, `type1`, `type2`, `imageUrl`) VALUES (:pokemon, :type1, :type2, :image)";
    
    
    $np = array();
    
    $np[":pokemon"] = $_POST["pokemon"];
    $np[":type1"] = $_POST["type1"];
    $np[":type2"] = $_POST["type2"];
    $np[":image"] = $_POST["image"];
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);

?>