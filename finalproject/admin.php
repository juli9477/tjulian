<?php

function checkLogin() {
    
    if(isset($_GET['login'])){
        
        if ($_GET['login']=="false"){
            echo "Wrong Credentials";
        }
        
    }
}

session_start();
include 'dbConnection.php';
$conn = getDatabaseConnection();
//print_r($_SESSION);

if (!isset($_SESSION['username'])) { //if not set, it means that admin hasn't logged in
    
    header("Location: login.php"); //redirects users to login page
    exit;
    
}

function restaurantList(){
   global $conn;
    $sql = "SELECT Name,restaurantsId
            FROM restaurants";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $records;
}




function waitTime(){
     $time = $_GET['time'];
   if($time == 1){
        
    //  $wait_time = $_GET['wait_time'];
    // if ( $wait_time = Average) {
    global $conn;
    $sql = "SELECT AVG(wait_time) FROM restaurants";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($records as $record) {
            echo $record['AVG(wait_time)']. " minutes is the Average wait time at all restaurants <br>" ;}//end of foreach
}//end of if




    if($time == 2){
    global $conn;
    $sql = "SELECT MIN(wait_time) FROM restaurants";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($records as $record) {
            echo $record['MIN(wait_time)']. " minutes is the minimum wait time out of all restaurants, at Pico De Gallo. <br> ";}//end of foreach
}

        if($time == 3){
    global $conn;
    $sql = "SELECT MAX(wait_time) FROM restaurants";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($records as $record) {
            echo $record['MAX(wait_time)']. " minutes is the maximum wait time out of all restaurants, at Benihana and Gianni's Pizza" ;}//end of foreach
}

}

?>





<html>
    <head>
        <title> Admin Section  </title>
         <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
     
        <script>

            function confirmDelete() {
                
                return confirm("Are you sure you want to delete this author?");
                
                
            }            
            
        </script>
        
    </head>
    <style>
#banner{
    width:1750px;
    height:500px; 
	transform: translate(-20px,-10px);
}
body{
    overflow-x: hidden;
    font-family: 'Quicksand', sans-serif;
    line-height: 40px;
    padding-bottom:20px;
}

#container{
    margin-left:600px;
}
h1{
    font-size:50px;
}

#log{
     transform: translate(880px,-100px);
}

    </style>
    <body>
<a href="index.php"><img src="img/banner6.png" id="banner"></a>
<div id="container">
        <h1> ADMIN SECTION</h1>
        <h2> Welcome <?=$_SESSION[adminFullName]?>!</h2>



   
        <div id="log"> <form action="logout.php">
        
        <input type="submit" value="Logout" />
        </form>
        </div>

        
        
    <form name="wait_time">  
         Wait Time
         <select name="time" >
        <option value="0">Select</option>
         <option value="1">Average</option>
         <option value="2">Min</option>
         <option value="3">Max</option>
         <input type="submit" value="Wait Time" />
    </form>
            <?=waitTime()?>
            <br > <br >
             
           
             <form action="addRestaurant.php">
        <input type="submit" value="Add Restaurants" />
        </form>
        <?php 
        
        $restaurant =restaurantList();
        
        foreach($restaurant as $restaurant) {
            
            echo "[<a href='updateRestaurant.php?restaurantsId=".$restaurant['restaurantsId']."'>Update</a>] ";
          
            echo "<form style='display:inline' action='deleteRestaurant.php' onsubmit='return confirmDelete()'>
                    <input type='hidden' name='restaurantsId' value='".$restaurant['restaurantsId']."'>
                    <input type='submit' value='Delete'>
                  </form>";
            
            echo $restaurant['Name'] . "  " . $restaurant['cuisine'] . " " . $restaurant['price'] . "<br>";
        }
        
   
   
        ?>
        
      </div>

    </body>
</html>