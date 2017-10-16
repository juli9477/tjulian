<?php

function getDatabaseConnection() {
    $host = 'us-cdbr-iron-east-05.cleardb.net'; //cloud 9 database
    $dbname = 'heroku_7502e641105dd00';
    $username = 'b1c865c444a53f';
    $password = '12cd50e6';
    
        //when connecting from Heroku
    if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $host = $url["host"];
        $dbname = substr($url["path"], 1);
        $username = $url["user"];
        $password = $url["pass"];
    } 
    
    
    //creates database connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    //we'll be able to see some errors with database
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn;
    
}
?>