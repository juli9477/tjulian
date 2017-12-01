<?php
$host = 'localhost'; //cloud 9 database
$dbname = 'form';
$username = 'root';
$password = '';
//creates database connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//we'll be able to see some errors with database
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    function displayname() {
       global $conn;
       $sql = "SELECT cuisine 
               FROM restaurants";
                
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        print_r($records);
        
        foreach ($records as $record) {
            echo "<option>" . $record['cuisine'] . "</option>";
        }
    }
        
        















$name_error='';
if(!empty($_POST['submitted'])){
 
 if(empty($name)){
  $name_error='Name is empty';
 }
}
if(isset($_POST['submit'])){

if(empty($_POST['name'])){
echo"Name is required <br>";
}
}




if(empty($_POST['cuisine'])){
echo"Cuisine type required <br>";
}

if(empty($_POST['price'])){
echo"Price range is required <br>";
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Hw 3 </title>
    </head>
    <body>
<h1>Restaurants in Monterey</h1>

<br>

 
 <form action "?" name="submitted" id='submit'method="post">
 
  Name
 <input type="text" name="name" >
  <br> 
  <span class='error'><?php echo $name_error    ?>
   
  </span>
  <br>
 Type of Cuisine   
 <select name="cuisine" >
  <option value=""></option>
  <option value="1">American</option>
  <option value="2">Mexican</option>
  <option value="3">Italian</option>
  <option value="4">Japanese</option>
  <option value="5">Chinese</option>
  <option value="6">Indian</option>
</select>

 <br> <br>
 
 Price Range <br>
 <input type="radio" name="price" value="1"> $ 
 <input type="radio" name="price" value="2"> $$ 
 <input type="radio" name="price" value="3"> $$$ <br>

 
  <br> <br>


    
  <button type="submit" name="submit">Submit</button> 
  
   <button type="reset" name="Reset">Reset</button> 
    
    
</form>



Thank you 
<?php
if(isset($_POST['submit'])){
echo $_POST['name'];}

?>  
for using our site


    </body>
</html>