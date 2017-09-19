<?php
     
  include 'functions.php';
  ?>
  
  


<!DOCTYPE html>
<html>
<head>
<title>Rock Paper Scissors </title>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h1>Rock<span id ="paper"> Paper </span> <span id ="scissors">Scissors</span></h1>
    
   <h3> Human &nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp
    Computer </h3>
    
   
    
    
<?php
        
       displayCard($humanCard);
            displayCard($computerCard);
            
            
            
            if($humanCard < $computerCard) {
                echo "<h2> Computer won </h2>";
            } else if($humanCard > $computerCard) {
                echo "<h2>Human won</h2>";
            } else {
                echo "<h2>It's a tie</h2>";
            }      
            
            
            
            
           
        ?>
        
        <h4> Rules  </h4>
       <p> Paper beats Rock <br>
        Rock beats Scissors<br>
        Scissors beats Paper<br></p>
        
         <div id = "air"> 
    <img src=img/airplane.png  style="width:5%;height:5%;" />
    </div>
</body>
</html>