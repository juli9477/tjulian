<?php

function displayImages(){
   
if(isset($_POST['submitForm'])){//checks whether the form has been submitted
 if ( $_FILES['myFile']['size'] >= 100000){
    echo "<h1>ERROR:File must be smaller than 1MB</h1>";
    }
    else {


move_uploaded_file($_FILES['myFile']['tmp_name'], "gallery/" . $_FILES['myFile']['name']);
//echo "<img src='gallery/" . $_FILES['myFile']['name'] . "' width='35px'> <br>";
$files = scandir("gallery/", 1);
for ($i = 0; $i < count($files)-2; $i++){
    echo "<div id='gallery'>";
    echo "<img class='images' src='gallery/" . $files[$i] . "' width='20px'>";
    echo "</div>";
} 
}//endIf

//if file size is more than 1 million bytes, error that file is to big

    
}

//click on image, and image should appear bigger
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lab 10: File Upload </title>
         <link href="css/style.css" rel="stylesheet" type="text/css" />
         <script src="https://code.jquery.com/jquery.min.js"></script>
         <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
         
     <script>
     $(document).ready(function(){
  $('img').click(function(){
        $('img').css("width", "");
        $(this).css("width", "400px");
  });
     
     });
     </script>    
         
         
         
         
         
    </head>
    <body>
<img src ="img/icon1.png" class="icon">
<img src ="img/icon2.png" class="icon">
<img src ="img/icon3.png" class="icon">

    <h1> Photo Gallery </h1>
    
    <form method="POST" enctype="multipart/form-data">
        
        Upload file: 
        
        <input type="file" name="myFile"/>
        
        <input type="submit" name="submitForm" value="Upload!"  />
        
    </form>

    <br />

    <?=displayImages()?>
    
    


    </body>
</html>