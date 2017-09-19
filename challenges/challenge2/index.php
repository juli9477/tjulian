<h1> Random Card Game </h1>

<?php
//declaring 
$humanCard = rand(0,4);
$computerCard = rand(0,4);





 function displayCard($randomValue){
      
   switch ($randomValue) {
      case 0: $symbol = "ten";
      break;
      case 1: $symbol = "jack";
      break;
      case 2: $symbol = "queen";
      break;
      case 3:$symbol = "king";
      break;
      case 4:$symbol = "ace";
      break;
     }
     echo "<img src='img/$symbol.png' class='cardImg' alt='$symbol' title='". ucfirst($symbol) ."' width= '70'/>";
    
    
     }
     
     
    
     
     

     
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Card game </title>
        <meta charset="utf-8" />
        <style> @import url("css/styles.css"); </style>
        
    </head>
    <body>
        <h3> Human Computer</h3>
        <?php
        
            
            displayCard($human);
            displayCard($computer);
            
            
            
            if($humanCard < $computerCard) {
                echo "<p> Computer won </p>";
            } else if($humanCard > $computerCard) {
                echo "<p>Human win</p>";
            } else {
                echo "<p>It's a tie</p>";
            }
            
        ?>
        
       
    </body>
</html>