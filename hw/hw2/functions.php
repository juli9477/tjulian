<?php

//Variables
$computer = range(0,2);
$human = range(0,2);
shuffle($computer);


//Displays Images
function displayImage(){
    
    $suits = array("paper","rock", "scissors");
  
    
    echo "<img src='img/".$suits[rand(0,1)].".png' alt='rps' />";
}




//Displays Who won
    $humanCard = rand(0,2);
$computerCard = rand(0,2);





 function displayCard($randomValue){
      
   switch ($randomValue) {
      case 0: $symbol = "paper";
      break;
      case 1: $symbol = "rock";
      break;
      case 2: $symbol = "scissors";
      break;
     }
     echo "<img src='img/$symbol.png' class='cardImg' alt='$symbol' title='". ucfirst($symbol) ."' />";
    
    
     }
     
     
     
     
     //How many times they won
      function displayPoints($randomValue0, $randomValue1, $randomValue2 ) {
      
     echo "<div id= 'output'>";
      if($randomValue1== $randomValue2 &&  $randomValue2 == $randomValue3){
       
       
       switch($randomValue1){
        case 0: $totalPoints = 2;
                echo "<h1> You have won the match </h1>";
                
                break;
       case 1: $totalPoints = 1;
        echo "<h1> You won once </h1>";
               break;
       case 2: $totalPoints = 0;
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