<?php
include 'dbConnection.php';
$conn = getDatabaseConnection();

function displayCuisineOptions(){
     global $conn;
       $sql = "SELECT DISTINCT cuisine
               FROM r_cuisine
               ORDER by cuisine";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        print_r($records);
        
        foreach ($records as $record) {
            echo "<option " ;
            
            if ($record['cuisine'] == $_GET['cuisine'] ) {
                echo "selected";
            }//end of if
            
            echo ">" . $record['cuisine'] . "</option>";
        }//end of foreach
   }//end of function
  
  
  
  
  
   
   function displaySearch(){
       global $conn;
       $sql = "SELECT Name,price,img,description,cuisine 
               FROM restaurants NATURAL JOIN r_cuisine
               WHERE 1";
      $namedParameters = array();
      
        if (!empty($_GET['submit'])) { //user typed something for quote content      
            //Preventing SQL injection
           $sql = $sql . " AND Name LIKE :NameContent"; //using named parameters to avoid SQL injection
           $namedParameters[":NameContent"] = "%" . $_GET['content'] . "%";
           
        if (!empty($_GET['price'])) { //price was checked by the user
            $sql = $sql . " AND price = :price";
            $namedParameters[':price'] = $_GET['price'];
             }//end of price isset

        if (!empty($_GET['cuisine'])) { //price was checked by the user
            $sql = $sql . " AND cuisine = :cuisine";
            $namedParameters[':cuisine'] = $_GET['cuisine'];  
            }
           
        
        
        
       $stmt = $conn->prepare($sql);
       $stmt->execute($namedParameters);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record) {
            echo  "<div class='name'>".$record['Name'] . "</div>". "<div class='img'>".'<img src='. $record['img'] .'>'. "</div>"
            . "<div id='price'> " . $record['price'] . "</div>" ."<div id='cuisine'>" 
            .$record['cuisine'] . "</div>"
            ."<div id='des'> ".$record['description']. "</div>";
        }//end of foreach
            

        }//end of if isset 
      
        
        }// end of function

  
?>


<!DOCTYPE html>
<html>

<head>
    <title>Final Project </title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    
</head>

<body>
  <a href="index.php"><img src="img/banner5.png" id="banner"></a>
  
    <a href="login.php"> <img src="img/user1.JPG" id="user"> </a>
    <form method="GET">
        <h1>Bon appetit</h1>
        <div id="container">

        <span class="title"> Search Restaurants </span>
        <input type="text" name="content" value=""> 
        
          &nbsp&nbsp
          
           <span class="title">Price:</span>
        <input type="radio" name="price" value="$">$
        <input type="radio" name="price" value="$$">$$
        <input type="radio" name="price" value="$$$">$$$
        &nbsp&nbsp
        
            <span class="title">Type of Cuisine</span>
          <select name="cuisine" >
         <option value="">Select Type of Cuisine</option>
          <?=displayCuisineOptions()?>
           
    
         
       
         <input type="submit" value="search" name="submit">
        
    </form>
    
    
<div class="search">
            <br> <br>
            <?=displaySearch()?>
            
        </div>
<br> <br>


</div>
</body>

</html>