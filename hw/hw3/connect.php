<?php

include 'dbConn.php';
$dbConn = getConnection("midterm");

echo "TEST <br>";
$sql = "SELECT * 
        FROM m_students ";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['m_students']  . "<br />";
}	 

?>


