//Part Two
$(document).ready(function() {

    $("#quiz").on("submit", function(event) {
        event.preventDefault();
         var question4 = document.quiz.question4.value;
        var question5 = document.quiz.question5.value;
        var question6 = document.quiz.question6.value;
        var correct = 0;

        if (question4 == "4") {
            correct++;
            $('<img src="img/right.png" width="50px" height="50px" >').appendTo("#right");
            $("#q1").css("background-color", "#41ad49");
        }

        if (question4 == " ") {

            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#right");
            $("#q1").css("background-color", "#ff0000");
             $('#word').append('Answer:4,000 years old');
            
        }

        if (question4 == "10") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#right");
            $("#q1").css("background-color", "#ff0000");
             $('#word').append('Answer:4,000 years old');
           
        }

        if (question4 == "20") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#right");
            $("#q1").css("background-color", "#ff0000");
             $('#word').append('Answer:4,000 years old');
        }


       


        if (question5 === "1936") {
            correct++;
            $('<img src="img/right.png" width="50px" height="50px" >').appendTo("#right2");
            $("#q2").css("background-color", "#41ad49");
           
        }

        

      else {
           $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong2");
            $("#q2").css("background-color", "#ff0000");
             $('#word1').append('Answer:1936');
        }



        if (question6 == "Animal") {
            correct++;
            $('<img src="img/right.png" width="50px" height="50px" >').appendTo("#right3");
            $("#q3").css("background-color", "#41ad49");
             $("#greenanimal").css("background-color", "#41ad49");
        }

        if (question6 == "Seal") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong3");
            $("#q3").css("background-color", "#ff0000");
            $("#greenanimal").css("background-color", "#41ad49");
             $("#redseal").css("background-color", "#ff0000");
        }
        if (question6 == "Wood") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong3");
            $("#q3").css("background-color", "#ff0000");
            $("#greenanimal").css("background-color", "#41ad49");
             $("#redwood").css("background-color", "#ff0000");
        }
         if (question6 == "") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong3");
            $("#q3").css("background-color", "#ff0000");
            $("#greenanimal").css("background-color", "#41ad49");
        }
        
        else {
             
        }
        
























        
       document.getElementById("number_correct").innerHTML = "You got " + Math.floor((correct/3)*100) + "% correct!";
        
        if (correct == 3) {
    document.getElementById("badge").innerHTML = '<img src="img/win.png" width="60px" height="60px">';
   document.getElementById("congrats").innerHTML = "Here is a virtual badge for getting over 80%";
     
     $('<img src="img/win.png" width="100px" height="100px" >').appendTo("#badge");
     $('#congrats').append('Here is a virtual badge for getting over 80%');
     
    }  

        
       
    });


});