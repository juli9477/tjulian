<?php
include '../../dbConnection.php';
$dbConn = getDatabaseConnection();
$score = $_POST['keyword'];





echo json_encode($keyword) ;
$sql = "INSERT INTO search (keyword) VALUES(:keyword)";
	
 $stmt = $dbConn->prepare($sql);
 $stmt->execute(['keyword' => $keyword,]);
 $result = $stmt->fetch(PDO::FETCH_ASSOC);
 
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        
        <script>
            
            function searchPicture() {
                $.ajax({

                        type: "GET",
                        url: "https://pixabay.com/api/?key=5589438-47a0bca778bf23fc2e8c5bf3e",
                        dataType: "json",
                        data: { "keyword": $("#keyword").val() },
                        success: function(data,status) {
                        
                           alert(data.hits["0"].webformatURL);
                        
                        },
                        complete: function(data,status) { //optional, used for debugging purposes
                        //alert(status);
                        }
                        
                });//ajax
                
            }
            
        </script>
        
    </head>
    <body>

        Keyword: <input type="text" id="keyword"/>
        <button onclick="searchPicture()"> Search </button>

    </body>
</html>