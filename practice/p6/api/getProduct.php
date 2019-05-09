<?php

    include '../../../inc/dbConnection.php';
    $dbConn = getDatabaseConnection("midtermPractice");
    
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    $productId = $_GET["productId"];
    
    $sql = "SELECT * FROM mp_product WHERE productId = :pId";
    
    $np = array();
    $np[":pId"] = $productId;
    
    $stmt = $dbConn->prepare($sql); //Connection must be properly initialized
    $stmt->execute($np);
    $randomProduct = $stmt->fetch(PDO::FETCH_ASSOC); //Use fetch for one record, FETCH ALL for multiple
        
    echo json_encode($randomProduct);
    

?>