<?php
session_start();

//print_r($_SESSION);

if (!isset($_SESSION['username'])) { //if not set, it means that admin hasn't logged in
    
    header("Location: index.php"); //redirects users to login page
    exit;
    
}

function authorList(){
    include '../../dbConnection.php';
    $conn = getDatabaseConnection();
    $sql = "SELECT *
            FROM q_author
            ORDER BY lastName";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $records;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Admin Section  </title>
    </head>
    <body>

        <h1> ADMIN SECTION</h1>
        <h2> Welcome <?=$_SESSION[adminFullName]?>!</h2>

<br ><br >

<form action="addAuthor.php">
    <input type="submit" value="Add New Author" />
</form>


        <?php 
        
        $authors =authorList();
        
        foreach($authors as $author) {
            
            echo "[<a href='updateAuthor.php?authorId=".$author['authorId']."'>Update</a>] ";
            
            echo $author['firstName'] . "  " . $author['lastName'] . " " . $author['country'] . "<br>";
        }
        
        
        ?>

    </body>
</html>