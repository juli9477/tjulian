<?php
//connect
$host = 'localhost'; //cloud 9 database
$dbname = 'quotes';
$username = 'root';
$password = '';
//creates database connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//we'll be able to see some errors with database
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// done connecting 

function displayReflectionQuotes() {
    global $dbConn;
    
    $sql = "SELECT quote, firstName, lastName 
            FROM q_quote 
            NATURAL JOIN q_category 
            NATURAL JOIN q_cat_quote 
            NATURAL JOIN q_author 
            WHERE category = 'Reflection'";
    
    //steps in getting data
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    
    //print_r($records);
    
    
    // to make info look neat, loop through info
    foreach ($records as $record) {
        
        echo "<em>" .  $record['quote'] . "</em>  "  . $record['firstName'] . "  "  . $record['lastName'] . "<br />";
        
    }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> SQL Joins </title>
    </head>
    <body>


    <h2> Reflection Quotes </h2>
    
    //Calling function
    <?=displayReflectionQuotes()?>
    
    <hr>

    <h2> Quotes by Male Authors </h2>

        Quote, Author, Country

    <hr>
        
    <h2> Three Longest Quotes </h2>
    
        Quote, Author, Quote Category
    
    <hr>


    </body>
</html>