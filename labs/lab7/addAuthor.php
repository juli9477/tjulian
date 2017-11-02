<?php

 
 if (isset($_GET['addForm'])) { //checks if form was submitted
     
     include '../../dbConnection.php';
     $conn = getDatabaseConnection();
     
     //echo "Form was submitted!";
     $sql = "INSERT INTO q_author
            (firstName, lastName, gender, dob, dod, profession, country, picture, biography)
            VALUES 
            (:fName, :lName, :gender, :dob, :dod, :profession, :country, :picture, :biography)";
     $np = array();
     $np[":fName"]  = $_GET['firstName'];
     $np[":lName"]  = $_GET['lastName'];
     $np[":gender"]  = $_GET['gender'];
     $np[":dob"]  = $_GET['dob'];
     $np[":dod"]  = $_GET['dod'];
     $np[":profession"]  = $_GET['profession'];
     $np[":country"]  = $_GET['country'];
     $np[":picture"]  = $_GET['picture'];
     $np[":biography"]  = $_GET['biography'];
     
     $stmt = $conn->prepare($sql);
     $stmt->execute($np);
     
     echo "Author added!";
     
 }


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Adding New Author</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
<div class="container">
 <div class="col-sm-5">
        <h1> Add New Author </h1>
        
        <fieldset>
            
            <legend> Adding New Author </legend>
            
            <form>
                
                First Name: <input type="text" name="firstName"/> <br /> <br />
                Last Name: <input type="text" name="lastName"/> <br /><br />
                Gender: <input type="radio" name="gender" value="F"
                            id="genderF"/><label for="genderF"></label>Female
                         <input type="radio" name="gender" value="M"
                            id="genderM"/><label for="genderF"></label>Male <br /><br />   
                Birth Date: <input type="date" name="dob"/><br /> <br />
                Death Date: <input type="date" name="dod"/><br /> <br />
                Profession: <input type="text" name="profession"/><br /> <br />
                Country: <select name="country">
                            <option>USA</option>
                            <option>Germany</option>
                            <option>China</option>
                            <option>India</option>
                        </select><br /> <br />
                Picture URL: <input type="text" name="picture"/>   <br>
                Biography: <br /> <textarea name="biography" cols="55" rows="5"></textarea><br>
                <input type="submit" value="Add Author" name="addForm">
            </form>
            
        </fieldset>
        
        </div>
        </div>
    </body>
</html>