<?php
session_start(); //starts or resumes an existing session
$_SESSION["hasBeenCalled"] = true;

//print_r($_POST); //displays values passed from login form

//validates the username and password
include 'dbConnection.php';
$conn = getDatabaseConnection();

$username = $_POST['username'];
$password = ($_POST['password']);

//echo $password;
// need sh1 in front of password if it is encripted 

//Following SQL works but it allows SQL Injection!!
// $sql = "SELECT *
//         FROM q_admin
//         WHERE username = '$username' 
//         AND   password = '$password'";
        
$sql = "SELECT *
        FROM admin
        WHERE username = :username 
        AND   password = :password";   

$namedParameters  = array();
$namedParameters[':username']  = $username;
$namedParameters[':password']  = $password;

$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($record);
$_SESSION["record"] = $record;
$_SESSION["hello"] = "hello";
if (empty($record)) {
    
  //header("Location: login.php?login=false");
  exit;
//   $sql = "UPDATE INTO admin
//             SET login =1";
//             $stmt = $conn->prepare($sql);
//             $stmt->execute();
//             $record = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    $_SESSION['in else'] = true;
    $_SESSION['username'] = $record['username'];
    $_SESSION['adminFullName'] = $record['firstName'] . " " . $record['lastName'];
   // echo $_SESSION['adminFullName'];
   //echo "Successful login!";
   //header('Location: admin.php'); //redirects users to admin page
   
}





?>