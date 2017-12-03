<?php
function displayImages(){
   
    $personA = 0;
    $personB = 0;

     $username = $_GET['username'];
     $question1 = $_GET['question1'];
     $question2 = $_GET['question2'];
     $question3 = $_GET['question3'];
     $question4 = $_GET['question4'];
     $question5 = $_GET['question5'];
    

if(isset($_GET['submit'])){//checks whether the form has been submitted


//name

if(empty($_GET['username'])){
 echo "<div id=\"echo\"> Please fill in all fields</div>" ;
}




//Question1 
if($question1== A){
   $personA++; 

}

if($question1== B){
   $personB++; 
}
if(empty($_GET['question1'])){
 echo "<div id=\"echo1\"> Please fill in all fields</div>" ;
 
}



//Question2
if($question2== A){
   $personA++; 
}

if($question2== B){
   $personB++; 
}
if(empty($_GET['question2'])){
 echo "<div id=\"echo2\"> Please fill in all fields</div>" ;
  
}


//Question3
if($question3== A){
   $personA++; 
}
if($question3== B){
   $personB++; 
}
if(empty($_GET['question3'])){
 echo "<div id=\"echo3\"> Please fill in all fields</div>" ;
}


//Question4
if($question4== A){
   $personA++; 
}

if($question4== B){
   $personB++; 
}
if(empty($_GET['question4'])){
 echo "<div id=\"echo4\"> Please fill in all fields</div>" ;
}


//Question5
if($question5== A){
   $personA++; 
}

if($question5== B){
   $personB++; 
}

if($question5== C){
   echo "<div id=\"echo5\"> Please fill in all fields</div>" ;
}





//Comparison
 if ( $personA >  $personB) {
 

       echo  ("<style>#aperson{display:inline;} </style>"); 
      echo "<div id=\"thanks\"> Thank you "  . $username . " for taking our Personality Test!</div>" ;
}
    }

if ( $personA < $personB) {
    
      echo  ("<style>#bperson{display:inline;} </style>"); 
        echo "<div id=\"thanks2\"> Thank you "  . $username . " for taking our Personality Test!</div>" ;
    
    }  



}//end If
//end function

?>

