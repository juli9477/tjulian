<?php
 include 'main.php';
?> 


<!DOCTYPE html>
<html>
    <head>
        <title>Homework 3 </title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara" rel="stylesheet">

        
    </head>
    <body>
<h1>Personality Test: Are you type A or B Personality?</h1>
<img src="img/smoke.png" id="smoke">
<img src="img/banner.jpg" id="banner">
<p>Personality type refers to the psychological classification of different types of individuals. 
Personality types are sometimes distinguished from personality traits, with the latter embodying a
smaller grouping of behavioral tendencies. Type A and Type B personality theory was devised by doctors
Meyer Friedman and Ray Rosenman in the 1950s.
This test has become very popular and is still used in today's reserach. Take the test and find out which personality type you are!  </p>
<br><br>
<form id="quiz" name="quiz"  >

        What is your name? <br>
        <input type="text" name="username" value="<?php if(isset($_GET['username'])) {echo $_GET['username'];} ?>"
        
        ><br><br>
    <div id="echo"> </div>
        
        How far in advance would you study for a major test?  <br>
       <input type="radio" name="question1"  value="A">I am constantly studying<br>
     <input type="radio"  name="question1" value="A">One week before<br> 
      <input type="radio" name="question1" value="B"> The day before<br>
          <input type="radio" name="question1" value="B">I do not study<br><br>
          <div id="echo1"> </div>

       
        How often are you late to events?<br>
        <input type="radio"  name="question2" value="A"> Never<br> 
         <input type="radio" name="question2" value="A"> Rarely<br>
       <input type="radio" name="question2" value="B"> Most of the time <br>
       <input type="radio" name="question2" value="B"> I've never been on time <br><br>
       <div id="echo2"> </div>
       
       How often do you worry about your future?<br>
        <input type="radio"  name="question3" value="A"> Constantly<br> 
         <input type="radio" name="question3" value="A"> Frequently<br>
       <input type="radio" name="question3" value="B"> Sometimes <br>
       <input type="radio" name="question3" value="B"> Never <br><br>
        <div id="echo3"> </div>


        </div> Check all that describe you<br>
       <input type="checkbox"  name="question4" value="A"> Workaholic<br>
      <input type="checkbox" name="question4" value="A"> Ambitious<br>
       <input type="checkbox"  name="question4" value="B"> Laid back<br>
       <input type="checkbox"  name="question4" value="B"> Patient<br><br>
  <div id="echo4"> </div>
        
        You play games to?<br>
          <select name="question5" >
          <option  value="C"></option>
          <option  value="A">Win</option>
          <option  value="B">Have fun</option>
          </select><br><br>
           <div id="echo5"> </div>
            
       <input type="submit" name="submit" value="submit"/>
       
          <br> <br>
          <div id="aperson">
              
            <div id="words1"> 
            <div id="container"> </div>
            <h2>Type A personality!</h2> 
            Congratulations, Your a type A personality! You have great sense
            of motivation and you are able to push yourself to your full potential. 
            You are a hard worker and have strong time management skills. Your drive will allow
            you to accomplish great things in life.
         
            </div> 
            <img src="img/brain.png" id="brain">
            
          </div>
          
           <div id="bperson">
           <div id="container2"> </div>
             <div id="words2">
                 <h2>Type B personality!</h2> 
                 Congratulations your a type B personality!  You are a go with the flow kind of person and you
            try to live a fairly relaxed lifestyle. You are able to work a healthy amount while still knowing
            how to have fun. Type B individuals tend to gravitate towards creative careers such as
            writers, counselors, therapists, actors or actress. </div> 
            <img src="img/brain2.jpg" id="brain2">
        
          </div>
          
      

    </form>
    
    <?php
    displayImages();
    ?>

    </body>
</html>