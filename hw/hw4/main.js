function check() {

    var question1 = document.quiz.question1.value;
    var question2 = document.quiz.question2.value;
    var question3_1 = document.quiz.question3_1;
    var question3_2 = document.quiz.question3_2;
    var question3_3 = document.quiz.question3_3;

 var correct = 0;


    if (question1 == "Hunterboat") {
        correct++;
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
        correct++;
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
        document.getElementById("green2").style.background = "#41ad49";}
    
    
    
    
    
    else {


    }




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
        correct++;
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
        
        correct--;
    }

    else {
document.getElementById("wrong3").innerHTML = '<img src="img/wrong.png" width="50px" height="50px">';
        document.getElementById("red8").style.background = "#ff0000";
        document.getElementById("green3").style.background = "#41ad49";
        document.getElementById("green4").style.background = "#41ad49";
    }
    
     document.getElementById("after_submit").style.visibility = "visible";
        document.getElementById("number_correct").innerHTML = "You got " + Math.floor((correct / 3) * 100) + "% correct!";
        
if (correct == 3) {
     document.getElementById("badge").innerHTML = '<img src="img/win.png" width="100px" height="100px">';
     document.getElementById("congrats").innerHTML = "Here is a virtual badge for getting over 80%";
       
    }    



}
