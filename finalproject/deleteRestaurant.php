<?php
session_start();

if (!isset($_SESSION['username'])) { //checks whether admin has already logged in
    
    header("Location: index.php");
    exit;
    
}

include 'dbConnection.php';
$conn = getDatabaseConnection();

$sql = "DELETE FROM restaurants WHERE restaurantsId = " . $_GET['restaurantsId'];

//echo $sql;

$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: admin.php');


?>