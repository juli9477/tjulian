$(document).ready(function() {


    $("#quiz").submit(function(e) {
        e.preventDefault()
        
        var question1 = document.quiz.question1.value;
        var question2 = document.quiz.question2.value;
        var question3_1 = document.quiz.question3_1;
        var question3_2 = document.quiz.question3_2;
        var question3_3 = document.quiz.question3_3;

        var question4 = document.quiz.question4.value;
        var question5 = document.quiz.question5.value;
        var question6 = document.quiz.question6.value;

        var score = 0;

        if (question1 == "Hunterboat") {
            score++;
            document.getElementById("right").innerHTML = '<img src="img/right.png" width="50px" height="50px" >';
            document.getElementById("green").style.background = "#41ad49";
        }

        if (question1 == "Watergliding") {
            document.getElementById("red").style.background = "#ff0000";
            document.getElementById("wrong1").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("green").style.background = "#41ad49";
        }
        if (question1 == "Warriorsvessel") {
            document.getElementById("red2").style.background = "#ff0000";
            document.getElementById("wrong1").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("green").style.background = "#41ad49";
        }

        if (question1 == "") {
            document.getElementById("red2").style.background = "#ff0000";
            document.getElementById("wrong1").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("green").style.background = "#41ad49";
        }
        else {

        }


        if (question2 == "Hungary") {
            score++;
            document.getElementById("right2").innerHTML = '<img src="img/right.png" width="50px" height="50px">';
            document.getElementById("green2").style.background = "#41ad49";
        }
        if (question2 == "USA") {
            document.getElementById("red3").style.background = "#ff0000";
            document.getElementById("wrong2").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("green2").style.background = "#41ad49";
        }

        if (question2 == "Morocco") {
            document.getElementById("red4").style.background = "#ff0000";
            document.getElementById("wrong2").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("green2").style.background = "#41ad49";

        }

        if (question2 == "") {
            document.getElementById("red3").style.background = "#ff0000";
            document.getElementById("wrong2").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("green2").style.background = "#41ad49";
        }

        else {}

        if (question3_1.checked) {
            document.getElementById("wrong3").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("red6").style.background = "#ff0000";
            document.getElementById("green3").style.background = "#41ad49";
            document.getElementById("green4").style.background = "#41ad49";

        }

        if (question3_2.checked) {
            document.getElementById("wrong3").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("red8").style.background = "#ff0000";
            document.getElementById("green3").style.background = "#41ad49";
            document.getElementById("green4").style.background = "#41ad49";

        }

        if (question3_3.checked) {
            document.getElementById("wrong3").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("red7").style.background = "#ff0000";
            document.getElementById("green3").style.background = "#41ad49";
            document.getElementById("green4").style.background = "#41ad49";

        }

        if (question3_1.checked && question3_2.checked) {
            score++;
            document.getElementById("right3").innerHTML = '<img src="img/right.png" width="50px" height="50px">';
            document.getElementById("green3").style.background = "#41ad49";
            document.getElementById("green4").style.background = "#41ad49";
            document.getElementById("wrong3").style.visibility = "hidden";
        }


        if (question3_1.checked && question3_3.checked) {
            document.getElementById("wrong3").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("red6").style.background = "#ff0000";
            document.getElementById("red7").style.background = "#ff0000";
            document.getElementById("green3").style.background = "#41ad49";
            document.getElementById("green4").style.background = "#41ad49";
        }


        if (question3_2.checked && question3_3.checked) {
            document.getElementById("wrong3").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("red7").style.background = "#ff0000";
            document.getElementById("red8").style.background = "#ff0000";
            document.getElementById("green3").style.background = "#41ad49";
            document.getElementById("green4").style.background = "#41ad49";
        }

        if (question3_1.checked && question3_2.checked && question3_3.checked) {
            document.getElementById("wrong3").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("red6").style.background = "#ff0000";
            document.getElementById("red7").style.background = "#ff0000";
            document.getElementById("red8").style.background = "#ff0000";
            document.getElementById("right3").style.visibility = "hidden";
            document.getElementById("wrong3").style.visibility = "visible";

            score--;
        }

        else {
            document.getElementById("wrong3").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
            document.getElementById("red8").style.background = "#ff0000";
            document.getElementById("green3").style.background = "#41ad49";
            document.getElementById("green4").style.background = "#41ad49";
        }



        //Part2

        if (question4 == "4") {
            score++;
            $('<img src="img/right.png" width="50px" height="50px" >').appendTo("#right4");
            $("#q1").css("background-color", "#41ad49");
        }

        if (question4 == " ") {

            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong5");
            $("#q1").css("background-color", "#ff0000");
             $('#word').append('Answer:4,000 years old');

        }

        if (question4 == "10") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong6");
            $("#q1").css("background-color", "#ff0000");
             $('#word').append('Answer:4,000 years old');

        }

        if (question4 == "20") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong7");
            $("#q1").css("background-color", "#ff0000");
             $('#word').append('Answer:4,000 years old');
        }





        if (question5 === "1936") {
            score++;
            $('<img src="img/right.png" width="50px" height="50px" >').appendTo("#right5");
            $("#q2").css("background-color", "#41ad49");

        }



      else {
           $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong8");
            $("#q2").css("background-color", "#ff0000");
             $('#word1').append('Answer:1936');
        }



        if (question6 == "Animal") {
            score++;
            $('<img src="img/right.png" width="50px" height="50px" >').appendTo("#right6");
            $("#q3").css("background-color", "#41ad49");
             $("#greenanimal").css("background-color", "#41ad49");
        }

        if (question6 == "Seal") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong9");
            $("#q3").css("background-color", "#ff0000");
            $("#greenanimal").css("background-color", "#41ad49");
             $("#redseal").css("background-color", "#ff0000");
        }
        if (question6 == "Wood") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong10");
            $("#q3").css("background-color", "#ff0000");
            $("#greenanimal").css("background-color", "#41ad49");
             $("#redwood").css("background-color", "#ff0000");
        }
         if (question6 == "") {
            $('<img src="img/wrong.png" width="50px" height="50px" >').appendTo("#wrong11");
            $("#q3").css("background-color", "#ff0000");
            $("#greenanimal").css("background-color", "#41ad49");
        }

        else {

        }

 document.getElementById("after_submit").style.visibility = "visible";
        document.getElementById("number_correct").innerHTML = "You got " + Math.floor((score / 6) * 100) + "% correct on this attempt!";

        if (score == 5) {
            document.getElementById("badge").innerHTML = '<img src="img/win.png" width="100px" height="100px">';
            document.getElementById("congrats").innerHTML = "Here is a virtual badge for getting over 80%";

        }
        if (score == 6) {
            document.getElementById("badge").innerHTML = '<img src="img/win.png" width="100px" height="100px">';
            document.getElementById("congrats").innerHTML = "Here is a virtual badge for getting over 80%";

        }

         $("#hide").show()




        $.ajax({
            type: "POST",
            url: "score.php",
            dataType: "JSON",
            data: { "score": score, 'username':'admin'},
            success: function(data) {
                console.log(data);
            },
            complete: function(data, status) { //optional, used for debugging purposes
                // alert(status);
            }

        }); //AJAX
});



    });


