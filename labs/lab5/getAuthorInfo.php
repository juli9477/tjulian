<?php

include 'dbConnection.php';

$conn = getDatabaseConnection();

$sql = "SELECT * FROM `q_author` WHERE authorId=" . $_GET['authorId'];
$stmt = $conn -> prepare ($sql);
$stmt -> execute();
$record = $stmt -> fetch();



?>

<!DOCTYPE html>
<html>
    <head>
        <title> Author Info </title>
    </head>
    <body>

<h1> Author Info </h1>

<?php
echo $record['firstName'] 
. "  " . $record['biography']. "<br> Date of Birth " .$record['dob']
. " <br> Date of Death:  " . $record['dod']
. " <br> Gender:  " . $record['gender']
. " <br> Profession:  " . $record['profession']
. " <br> Country:  " . $record['country']
. "<br><img src= " . $record['picture'];

?>

    </body>
</html>