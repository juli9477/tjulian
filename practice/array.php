<?php
    function displaySymbol(){
        
      echo "<img src=../labs/lab2/img/$symbol.png width= '50' />";  
    }
    
    $symbols = array( "lemon" , "orange" , "cherry" ); //initalizes array with 3 items
    
    //print_r($symbols);// display all elemts for debugging purposes
    
    //echo $symbol[0];
    
    //displaySymbol($symbols[1]);
    
    $symbols[] = "bar"; //Adding new element to the end
    //displaySymbol($symbols[3]);
    
    array_push($symbols, "seven");
    
    
   // $randomSymbol = rand(0,4);
    //displaySymbol($symbols [$randomSymbol]);
    //displaySymbol($symbols[$i]);
    //displaySymbol($symbol[array_rand($symbol)]);
    
    print_r($symbols);
    $lastItem = array_pop($symbols); 
    
    displaySymbol ($lastIteam);
    print_r($symbols);
    sort($symbols);
    echo "<hr> After Sort: <br />";
    print_r($symbols);
    
    shuffle($symbols);
     echo "<hr> After Sort: <br />";
    print_r($symbols);
    
    
    foreach($symbol as #symbol){
        displaySymbol($symbol)
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP array practice</title>
    </head>
    <body>

    </body>
</html>