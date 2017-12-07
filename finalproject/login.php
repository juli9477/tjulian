<?php
session_start(); 
function checkLogin() {
    
    if(isset($_GET['login'])){
        
        if ($_GET['login']=="false"){
            echo "Wrong Credentials";
        }
        
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
         <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
       <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
    <style>
    body{
        	overflow:hidden;
        	font-family: 'Quicksand', sans-serif;
    }
    #log {
	text-align: center;
	height: 300px;
	width: 300px;
	transform: translate(700px, -1250px);
		z-index: 4; 
		position: relative;
}

#back{
   width:1800px;
    height:1500px;
	transform: translate(-20px,-10px);
	z-index: -1;
		
}
#container {
	background-color: white;
	height: 320px;
	width: 300px;
	transform: translate(410px, -1280px);
	z-index:1; 
	border-radius: 20px;
	position: absolute;
	opacity: .6;
	 
}

form{
     margin:600px;
}
</style>
    <body>
<script>

var aCall = function(){
    
    var username=document.getElementById('username').value;
     var password=document.getElementById('password').value;
     console.log(username);
      console.log(password);
 $.ajax({

type: 'POST',
url: 'loginProcess.php',
data:{"username":username, "password":password},
success: function(data,status) {
    console.log("success");
    if(data!="false"){
    window.location ='admin.php';
    } else {
        $('#error').html("Error, Wrong Credentials");
    }
    },
complete: function(data,status) { //optional, used for debugging purposes
//alert(status);
}

});//ajax   
    
};    
</script>

  <img src="img/back5.jpg" id="back">
   <div id="container">   </div>
<div id="log">
        <h1> Admin Login</h1>
    
        Username: <input type="text" id="username"/> <br /> <br />
        Password: <input type="password" id="password"/> <br />
      <button onclick="aCall();">Sign In</button>
      <div id="error"></div>
            
        
<?=checkLogin()?>


 </div>
    </body>
</html>