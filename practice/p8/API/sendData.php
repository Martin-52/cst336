<?php

include '../../../inc/dbConnection.php';

session_start();
$conn = getDatabaseConnection("newsletter");

$parameters = array();

// TODO: Grab all of our paramters from the session
$parameters[":name"]= $_SESSION["name"];
$parameters[":email"] = $_SESSION["email"];
$parameters[":major"] = $_SESSION["major"];
$parameters[":zip"] = $_SESSION["zip"];

// TODO: Execute SQL to add a row to database table
$sql = "INSERT INTO users ( 'name', 'email', 'major', 'zip') 
    VALUES (:name, :email, :major, :zip)";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($parameters);

// Destory the session once you submit
//session_destroy();

// TODO: Return all the rows from the datable table

?>
