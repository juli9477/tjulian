<?php

 
 if (isset($_GET['addForm'])) { //checks if form was submitted
     
     include 'dbConnection.php';
     $conn = getDatabaseConnection();
     
     //echo "Form was submitted!";
     $sql = "INSERT INTO restaurants
            (Name, price, cuisineId, img, description)
            VALUES 
            (:Name, :price, :cuisineId, :img, :description)";
     $np = array();
     $np[":Name"]  = $_GET['Name'];
     $np[":price"]  = $_GET['price'];
     $np[":cuisineId"]  = $_GET['cuisineId'];
     $np[":img"]  = $_GET['img'];
     $np[":description"]  = $_GET['description'];
    
     
     $stmt = $conn->prepare($sql);
     $stmt->execute($np);
     
     echo "Restaurant added!";
     
 }


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Adding New Author</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
           <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
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
      
        <fieldset>
            
           <h1> Adding New Restaurants </h1>
              <div id="container"> 
            <form>
                
                Restaurant Name: <input type="text" name="Name"/> <br /> <br />
              
                Price: 
                <input type="radio" name="price" value="$" id="price"/><label for="price"></label>$
                <input type="radio" name="price" value="$$"id="price"/><label for="price"></label>$$
                <input type="radio" name="price" value="$$$"id="price"/><label for="price"></label>$$$<br /><br /> 
                            
                
                Cuisine: <select name="cuisineId">
                            <option value="1">American</option>
                            <option value="2">Indian</option>
                            <option value="3">Italian</option>
                            <option value="4">Japanese</option>
                             <option value="5">Mexican</option>
                        </select><br /> <br />
                Picture URL: <input type="text" name="img"/>   <br>
                Description: <br /> <textarea name="description" cols="55" rows="5"></textarea><br>
                <input type="submit" value="Add" name="addForm">
            </form>
            
        </fieldset>
        
</div>
    </body>
</html>

