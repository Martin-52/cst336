<?php

function getDatabaseConnection($dbname = "ottermart") {
    
    $host = "localhost";
    $username = "root";
    $password = "";
    
    //when connecting from Heroku
    if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $host = "us-cdbr-iron-east-03.cleardb.net";
        $dbname = "heroku_7ac4ca90e24c859";
        $username = "b536b63d7d43fe";
        $password = "3cce16be";
    } 
    
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    return $dbConn;
}

?>
