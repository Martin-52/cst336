<?php

function getDatabaseConnection($dbname = 'ottermart') {
    
    $host = 'localhost';//Cloud 9
    //$dbname = 'tcp'
    $username = 'root';
    $password = '';
    
    //When Connecting to Heroku
     if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $host = $url["host"];
        $dbname = substr($url["path"], 1);
        $username = $url["user"];
        $password = $url["pass"];
        
        echo "<script>console.log( 'CLEARDB_DATABASE_URL: " . $url . "' );</script>";
        echo "<script>console.log( 'Host: " . $url["host"] . "' );</script>";
        echo "<script>console.log( 'Path: " . $url["path"] . "' );</script>";
        echo "<script>console.log( 'User: " . $url["user"] . "' );</script>";
        echo "<script>console.log( 'Pass: " . $url["pass"] . "' );</script>";
    }

    
    //creates db connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    //displays errors when accessing tables
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn;
}

?>