 <?php
 function displayRandomColor(){
      return "rgba(". rand(0,255) ." , ". rand(0,255) . " , ". rand(0,255) . " , ". (rand(0,100)/100) .")  ;";
 }
 ?>




<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8" />
        <title> ex1 Random Background </title>
        <style>
            body{
                
              <?php
                echo "background-color:rgba(". rand(0,255) ." , ". rand(0,255) . " , ". rand(0,255) . " , ". (rand(0,100)/100) . ");"
                
    
                ?> 
            }
            
            
            
            
             h1{
                
              <?php
                echo "color:rgba(". rand(0,255) ." , ". rand(0,255) . " , ". rand(0,255) . " , ". (rand(0,100)/100) . ");" ;
                
                echo "background-color: " . displayRandomColor() . " ;" ;
                
             
                ?> 
             }
                
                h2{
                    background-color: <?= displayRandomColor() ?>;
                    color: <?=displayRandomColor()?>;
            }
        </style>
        
    </head>
    
    
    <body>
        <h1>Welcome!</h1>
        <h2>Good Morning!</h2>

    </body>
</html>