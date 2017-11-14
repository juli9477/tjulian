//Part Two
$(document).ready(function() {

    $("#quiz").on("submit", function(event) {
        event.preventDefault();
        var question1 = document.quiz.question1.value;
        var question2 = document.quiz.question2.value;
        var question3 = document.quiz.question3.value;
        var correct = 0;

        if (question1 == "4") {
            correct++;
            $('<img src="img/right.png" width="50px" height="50px" >').appendTo("#right");
            $("#q1").css("background-color", "#41ad49");
        }

        if (question1 == " ") {

            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#right");
            $("#q1").css("background-color", "#ff0000");
             $('#word').append('Answer:4,000 years old');
            
        }

        if (question1 == "10") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#right");
            $("#q1").css("background-color", "#ff0000");
             $('#word').append('Answer:4,000 years old');
           
        }

        if (question1 == "20") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#right");
            $("#q1").css("background-color", "#ff0000");
             $('#word').append('Answer:4,000 years old');
        }


       


        if (question2 === "1936") {
            correct++;
            $('<img src="img/right.png" width="50px" height="50px" >').appendTo("#right2");
            $("#q2").css("background-color", "#41ad49");
           
        }

        

      else {
           $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong2");
            $("#q2").css("background-color", "#ff0000");
             $('#word1').append('Answer:1936');
        }



        if (question3 == "Animal") {
            correct++;
            $('<img src="img/right.png" width="50px" height="50px" >').appendTo("#right3");
            $("#q3").css("background-color", "#41ad49");
             $("#greenanimal").css("background-color", "#41ad49");
        }

        if (question3 == "Seal") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong3");
            $("#q3").css("background-color", "#ff0000");
            $("#greenanimal").css("background-color", "#41ad49");
             $("#redseal").css("background-color", "#ff0000");
        }
        if (question3 == "Wood") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong3");
            $("#q3").css("background-color", "#ff0000");
            $("#greenanimal").css("background-color", "#41ad49");
             $("#redwood").css("background-color", "#ff0000");
        }
         if (question3 == "") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong3");
            $("#q3").css("background-color", "#ff0000");
            $("#greenanimal").css("background-color", "#41ad49");
        }
        
        else {
             
        }
        
























        
       document.getElementById("number_correct").innerHTML = "You got " + Math.floor((correct/3)*100) + "% correct!";
        
        if (correct == 3) {
    // document.getElementById("badge").innerHTML = '<img src="img/win.png" width="60px" height="60px">';
   //  document.getElementById("congrats").innerHTML = "Here is a virtual badge for getting over 80%";
     
     $('<img src="img/win.png" width="100px" height="100px" >').appendTo("#badge");
     $('#congrats').append('Here is a virtual badge for getting over 80%');
     
     
     
    
       
    }  

        
       
    });

});