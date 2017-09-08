<?php
   function displaySymbol($randomValue, $pos){
      
   switch ($randomValue) {
      case 0: $symbol = "seven";
      break;
      case 1: $symbol = "lemon";
      break;
      case 2: $symbol = "grapes";
      break;
      case 3:$symbol = "cherry";
      break;
     }
     echo "<img src='img/$symbol.png' id='reel$pos' alt='$symbol' title='". ucfirst($symbol) ."' width= '70'/>";
    
    
     }
     
   
 
     
     
     function displayPoints($randomValue1, $randomValue2, $randomValue3, $randomValue4) {
      
     echo "<div id= 'output'>";
      if($randomValue1== $randomValue2 &&  $randomValue2 == $randomValue3){
       
       
       switch($randomValue1){
        case 0: $totalPoints = 1000;
                echo "<h1> Jackpot! </h1>";
                echo  '<audio controls autoplay>
                 <source src = "jackpot.mp3">
                 </audio>';
                break;
       case 1: $totalPoints = 500;
               break;
       case 2: $totalPoints = 250;
               break;
       case 3: $totalPoints= 900;
       break;
       }
       echo "<h2> You won $totalPoints points! </h2>";
      } else{
       echo "<h3> Try Again! </h3>";
      }
      echo"</div>";
     }
     
     
     
     function play(){
         for ($i=1; $i<4; $i++){
             ${"randomValue" . $i } = rand(0,3);
             displaySymbol(${"randomValue" . $i}, $i);
             
         }
         displayPoints($randomValue1, $randomValue2, $randomValue3, $randomValue4);
     }
     
   
    



?>