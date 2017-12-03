//Part Two
$(document).ready(function() {

    $("#quiz").on("submit", function(event) {
        event.preventDefault();
        //var question = document.quiz.question.value;
        var question1 = document.quiz.question1.value;
        var question2 = document.quiz.question2.value;
        var question3 = document.quiz.question3.value;
        var question4 = document.quiz.question4.value;
        var question5 = document.quiz.question5.value;
        var personA = 0;
        var personB = 0;

        if (question1 == "A") {
           personA++ ;
        }

        if (question1 == "B") {
        personB++ ;
        }
        
         if (question1 == " ") {
        alert("please fill in all questions");
        }
        
        
        
        
        
        if (question2 == "A") {
           personA++ ;
        }

        if (question2 == "B") {
        personB++ ;
        }
        
         if (question2 == " ") {
        alert("please fill in all questions");
        }
        
        
        


if (question3 == "A") {
           personA++ ;
        }

        if (question3 == "B") {
        personB++ ;
        }
        
         if (question3 == " ") {
        alert("please fill in all questions");
        }

       
        
        else {
             
        }
        
        
        
        
        if (question4 == "A") {
           personA++ ;
        }

        if (question4 == "B") {
        personB++ ;
        }
        
         if (question4 == " ") {
        alert("please fill in all questions");
        }

        
        
         if (question5 == "A") {
           personA++ ;
        }

        if (question5 == "B") {
        personB++ ;
        }
        
         if (question5== " ") {
        alert("please fill in all questions");
        }

       
        
        else {
             
        }
        






        
        if ( personA >  personB) {
     $('#name').append('Thank you question for taking our quiz ');
     document.getElementById('name').value ;
     
    $("#aperson").show();
    
    }  

if ( personA < personB) {
    
     $("#bperson").show();
    }  

        
       
    });

});