<?php

include '../../dbConnection.php';
$dbConn = getDatabaseConnection();
$score = $_POST['score'];
$username = $_POST['username'];


// count(*) from scores group_by username where username is $username

echo json_encode($score . $username) ;
function checkLogin() {
    
    if(isset($_GET['login'])){
        
        if ($_GET['login']=="false"){
            echo "Wrong Credentials";
        }
        
    }
}



?>

<!DOCTYPE html>
<html>

<head>
    <title>Hw 5 </title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="main.js"> </script>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<style>
    body{
        overflow-x: hidden;
     
    }
</style>
<body>
    
    
    <?php echo '<input type="text" value="' . $_GET['login'] . '" id="username" style="display:none">'; ?>
    <img src ="img/banner.jpg" id="banner">
    <h1> Kayaking Quiz </h1><br>
<img src ="img/icon5.png" class="icon">
<img src ="img/icon3.jpg" class="icon">
<img src ="img/icon.png" class="icon">
<br><br><br><br>
    
    


    <form id="quiz" name="quiz">

        <div id="right"></div>
        <div id="wrong1"></div>
        
        What is the translation for kayak?<br>
        <span id="red"><input type="radio" name="question1" value="Watergliding">Water gliding <br></span>
        <span id="green"><input type="radio"  name="question1" value="Hunterboat">Hunter's boat<br> </span>
        <span id="red2"><input type="radio" name="question1" value="Warriorsvessel"> Warrior's vessel<br><br></span>

        <div id="right2"></div>
        <div id="wrong2"></div>
        What country has the most Olympic medals for kayaking?<br>
        <span id="green2"><input type="radio"  name="question2" value="Hungary"> Hungary <br> </span>
         <span id="red3"><input type="radio" name="question2" value="USA"> U.S.A <br></span>
         <span id="red4"><input type="radio" name="question2" value="Morocco"> Morocco<br><br></span>


        <div id="right3"></div> Check all that are kayaks<br>
         <div id="wrong3"></div>

        <span id="red6"><span id="green3"> <input type="checkbox"  name="question3_1" value="Sit"> Sit on Tops<br></span></span>
        <span id="red7"><input type="checkbox" name="question3_3" value="Skipjack"> Skipjack<br></span>
        <span id="red8"><span id="green4"><input type="checkbox"  name="question3_2" value="Cockpit"> Cockpit Style<br></span></span>


    
      
        <div id="right4"></div>
        <div id="wrong4"></div>
        <div id="wrong5"></div>
         <div id="wrong6"></div>
          <div id="wrong7"></div>
        <br><div id= "q1"> How old are kayaks?</div><br>
        <select name="question4" id="question4">
  <option value=" "> </option>
  <option value="4">4,000 yrs old</option>
  <option value="10">10,000 yrs old </option>
  <option value="20">20,000 yrs old</option> <br>
</select>
<div id="word"> </div>


         <div id="right5"></div>
        <div id="wrong8"></div>
        <br><br><div id="q2"> What year was kayak races added to the Olympics?</div><br>
        <input type="text" name="question5">
        <div id="word1"> </div>


         <div id="right6"></div>
         <div id="wrong9"></div>
          <div id="wrong10"></div>
           <div id="wrong11"></div>
        <br><br> <div id="q3"> What were the first kayaks made of?</div><br>
        <div id="redseal"><input type="radio" name="question6" value="Seal">Seal Fur <br></div>
        <div id="greenanimal"> <input type="radio" name="question6" value="Animal">Animal skin and whalebones<br></div>
        <div id="redwood"><input type="radio" name="question6" value="Wood">Wood<br></div>







  
            <br> <br>
        <!--<input id="button" type="button" value="Submit" onclick="check();">-->
        <input type="submit" value="Submit" type="button" >

        <!--<input id="button" type="button" value="submit">-->

    </form>
    
    
    <div id= "center"> 
   
     
    <div id="after_submit">  </div>
        <p id="number_correct"></p>
        <div id="result"></div>  
    <div id="congrats"></div>   
     <div id="badge"></div>   
    
    
   <div id="hide"> 
    
<?php
    
echo "<h3>Here is your average score<h3> ";
$sql = "SELECT AVG(score) score FROM scores ";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['score'] . "<br /> <br />";
}	



$sql = "SELECT count(id)  AS total FROM scores ";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo "You have taken this quiz ". $record['total'] ." times" ."<br />";
}	

?>
 
 
</div>


</body>

</html>
