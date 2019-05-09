<?php
    
    include '../../../inc/dbConnection.php';
    $dbConn = getDatabaseConnection("midtermPractice");
    
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    $sql = "SELECT * FROM mp_product ORDER BY RAND() LIMIT 1";
    $stmt = $dbConn->prepare($sql); //Connection must be properly initialized
    $stmt->execute();
    $randomProduct = $stmt->fetch(PDO::FETCH_ASSOC); //Use fetch for one record, FETCH ALL for multiple
        
    echo json_encode($randomProduct);

?>