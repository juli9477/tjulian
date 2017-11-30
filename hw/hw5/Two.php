

<!DOCTYPE html>
<html>

<head>
    <title>Hw 4 </title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery.min.js"></script>
      <script src="main2.js"> </script> 
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>

<body>
       <img src ="img/banner.png" id="banner">
    <h1> Kayaking Quiz </h1><br><br>
    
<img src ="img/icon5.png" class="icon">
<img src ="img/icon3.jpg" class="icon">
<img src ="img/icon.png" class="icon">
    <h3> Part 2</h3>


    <form id="quiz" name="quiz">


        <div id="right"></div>
        <div id="wrong"></div>
        <br><div id= "q1"> How old are kayaks?</div><br>
        <select name="question4" id="question4">
  <option value=" "> </option>
  <option value="4">4,000 yrs old</option>
  <option value="10">10,000 yrs old </option>
  <option value="20">20,000 yrs old</option> <br>
</select>
<div id="word"> </div>


         <div id="right2"></div>
        <div id="wrong2"></div>
        <br><br><div id="q2"> What year was kayak races added to the Olympics?</div><br>
        <input type="text" name="question5">
        <div id="word1"> </div>


         <div id="right3"></div>
        <div id="wrong3"></div>
        <br><br> <div id="q3"> What were the first kayaks made of?</div><br>
        <div id="redseal"><input type="radio" name="question6" value="Seal">Seal Fur <br></div>
        <div id="greenanimal"> <input type="radio" name="question6" value="Animal">Animal skin and whalebones<br></div>
        <div id="redwood"><input type="radio" name="question6" value="Wood">Wood<br></div>








        <br> <br>
        <button type="submit"> Submit </button>

    </form>
    
     <div id= "center"> 
    <div id="after_submit"></div>
        <p id="number_correct"></p>
        <div id="congrats"></div>   
     <div id="badge"></div>   

    


    <a href="index.html"> <input id="button1" type="button" value="Part One"> </a>
</div>


 
 
</div>



</body>



</html>