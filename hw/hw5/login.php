<?php

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
    <title>Log In </title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<style>
    body{
        	overflow:hidden;
    }
</style>
<body>
    <img src="img/banner2.jpg" id="banner2">
    <div id="container">   </div>
    <div id="log">
        <h1>Log In</h1>

        <form method="POST" action="loginProcess.php">

            Username: <input type="text" name="username" /> <br /> <br /> Password: <input type="password" name="password" /> <br /> <br />
            <input type="submit" value="Login!" name="loginForm" /><br /><br />
<?=checkLogin()?>
        </form>
    </div>
  
</body>

</html>