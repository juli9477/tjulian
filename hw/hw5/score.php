<?php
include '../../dbConnection.php';
$dbConn = getDatabaseConnection();
$score = $_POST['score'];
$username = $_POST['username'];




echo json_encode($score . $username) ;
$sql = "INSERT INTO scores (score) VALUES(:score)";
	
 $stmt = $dbConn->prepare($sql);
 $stmt->execute(['score' => $score,]);
 $result = $stmt->fetch(PDO::FETCH_ASSOC);
 
 
 
 

echo "TESTING";
$sql = "SELECT score
		FROM scores ";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['score'] . "<br />";
}	
?>