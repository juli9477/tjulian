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
        <title> Lab 7: Admin Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
       
        
    </head>
    <body>
<div class="container">
 <div class="col-sm-4">
        <h1> Admin Login</h1>
        
        <form method="POST" action="loginProcess.php">
    
        Username: <input type="text" name="username"/> <br /> <br />
        Password: <input type="password" name="password"/> <br />
        <input type="submit" value="Login!" name="loginForm" />
            
        </form>

<?=checkLogin()?>

</div>
</div>

    </body>
</html>