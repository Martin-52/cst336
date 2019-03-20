<?php

$host = "localhost";
$dbname = "ottermart";
$username = "root";
$password = "";

//To establish correction
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//TO set error handling exception
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$sql = "SELECT * FROM om_product ORDER BY productPrice LIMIT 10";
$stmt = $dbConn->prepare($sql); //Connection must be properly initialized
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //Use fetch for one record, FETCH ALL for multiple

//print_r($records); //Displays the content

echo json_encode($records)

//echo $records[0]['productName'];



?>