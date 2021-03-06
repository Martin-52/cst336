<?php

    include '../../../inc/dbConnection.php';
    $conn = getDatabaseConnection("ottermart");
    
    $sql = "SELECT * FROM om_product WHERE 1";
    
    // Checks whether user has typed something in the "Product" text box
    if(!empty($_GET['product'])) {
        $sql .= " AND productName LIKE :productName";
        $namedParameters[":productName"] = "%" .$_GET['product'] . "%";
    }
    
    // Checks whether user has selected a category of product
    if(!empty($_GET['category'])) {
        $sql .= " AND catId = :categoryId";
        $namedParameters[":categoryId"] = $_GET['category'];
    }
    
    // Checks whether user has typed something in the price text boxes
    if(!empty($_GET['priceFrom'])) {
        $sql .= " AND price >= :priceFrom";
        $namedParameters[":priceFrom"] = $_GET['priceFrom'];
    }
    
    // Checks whether user has typed something in the price text boxes
    if(!empty($_GET['priceTo'])) {
        $sql .= " AND price <= :priceTo";
        $namedParameters[":priceTo"] = $_GET['priceTo'];
    }
    
    // Checks if the user has selected a radio button
    if(isset($_GET['orderBy'])) {
        if($_GET['orderBy'] == "price") {
            $sql .= " ORDER BY price";
        } else if($_GET['orderBy'] == "name"){
            $sql .= " ORDER BY productName";
        }
    }
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($records);
    
    
    
?>