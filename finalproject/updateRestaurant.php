<?php

session_start();

if (!isset($_SESSION['username'])) { //checks whether admin has already logged in
    
    header("Location: index.php");
    exit;
    
}

include 'dbConnection.php';
$conn = getDatabaseConnection();

function getAuthorInfo() {
    global $conn;
        
    $sql = "SELECT *
            FROM restaurants
            WHERE restaurantsId = " . $_GET['restaurantsId'];    
     
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); 
    return $record;
    
}

if (isset($_GET['updateForm'])) { //Admin submitted update form
    
    //echo "Update form was submitted!";
    
    
     $sql = "UPDATE restaurants SET 
	            Name = :Name,
	            cuisineId = :cuisineId,
	             price = :price,
	               img = :img,
	            description=:description
               WHERE restaurantsId = :restaurantsId";


                    
     $np = array();
     $np[":Name"]  = $_GET['Name'];
     $np[":cuisineId"]  = $_GET['cuisineId'];
     $np[":price"]  = $_GET['price'];
     $np[":img"]  = $_GET['img'];
     $np[":description"]  = $_GET['description'];
     $np[":restaurantsId"] = $_GET['restaurantsId'];
     $stmt = $conn->prepare($sql);
     $stmt->execute($np);
     
     echo "Update Added!";

    
}


if (isset($_GET['restaurantsId'])) {
    
    $authorInfo = getAuthorInfo();  
    
    //print_r($authorInfo);
    
}




?>


<!DOCTYPE html>
<html>
    <head>
        <title> Update Restaurants's Info </title>
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
    padding:20px;
     margin-left:500px;
}
</style>
    <body>
          <a href="index.php"><img src="img/banner7.png" id="banner"></a>

        <h1> Updating Restaurant Info </h1>
        <div id="container">
        <fieldset>
            
           
            
            <form>
                
                
                 <input type="hidden" name="restaurantsId" value="<?=$authorInfo['restaurantsId']?>">
                 
                Name: <input type="text" name="Name" value="<?=$authorInfo['Name']?>" /> <br /> <br /> 
               
                Price: <input type="radio" name="price" value="$"
                            id="price"  
                            
                            <?php
                                if ($authorInfo['price']=="$") {
                                    echo "checked";
                                     }
                                    ?>
                            
                            />
                            
                            <label for="price"> </label>$
                            
                            
                         <input type="radio" name="price" value="$$"
                         
                            <?= ($authorInfo['price']=="$$")?"checked":"" ?>
                         
                            id="price"   /><label for="price"></label>$$  
                            
                            
                             <input type="radio" name="price" value="$$$"
                         
                            <?= ($authorInfo['price']=="$$$")?"checked":"" ?>
                         
                            id="price"/><label for="price"></label>$$$ <br /> <br />  
                            
               
                 Cuisine: <select name="cuisineId">
                            <option value="1">American</option>
                            <option value="2">Indian</option>
                            <option value="3">Italian</option>
                            <option value="4">Japanese</option>
                             <option value="5">Mexican</option>
                        </select><br /> <br />
                        
                Picture URL: <input type="text" name="img"  value="<?=$authorInfo['img']?>" />   <br> <br /> 
                Description: <br /> <textarea name="description" cols="55" rows="5"><?=$authorInfo['description']?></textarea><br><br /> 
                <input type="submit" value="Update Restaurant" name="updateForm">
            </form>
            
        </fieldset>
   </div>
    </div>                        </div>
    </body>
</html>