
           
var randomNumber = Math.floor(Math.random()*99) + 1;
var guesses = document.querySelector('#guesses');
var lastResult = document.querySelector('#lastResult');
var lowOrHi = document.querySelector('#lowOrHi');
var wins = 0; 
var lose = 0; 
var guessSubmit = document.querySelector('.guessSubmit');
var guessField = document.querySelector('.guessField');

var guessCount = 1;
var resetButton = document.querySelector('#reset'); 
resetButton.style.display = 'none';
guessField.focus();






function checkGuess(){
 win.innerHTML = wins;
 loss.innerHTML = lose; 
 
   var userGuess = Number(guessField.value);
   if(guessCount===1){
       guesses.innerHTML = 'Previous guesses: ';
       }
       guesses.innerHTML += userGuess + ' ';
       
       
       
       
       
       
       
       
       
       if(userGuess=== randomNumber){
           lastResult.innerHTML = 'Congratulations! You got it right!';
           //jQ 1
           $("#lastResult").css({ "background-color": "green"});
            //lastResult.style.backgroundColor = 'green';
           
           lowOrHi.innerHTML = ' ';
           wins++; 
           setGameover();
       }
       else if(userGuess > 99){
          lastResult.innerHTML = "Number needs to be below 99";
          guessCount--;
       } 
       else if(guessCount === 7){
           lastResult.innerHTML = "Sorry, you lost!";
           lose++; 
           setGameover();
           
       } 
       
       else{
           lastResult.innerHTML ="Wrong!";
           
          
           //jQ 2
           $("#lastResult").css({ "background-color": "red"});
            //lastResult.style.backgroundColor = "red";
           
           
           if(userGuess < randomNumber){
               lowOrHi.innerHTML = "Last guess was too low";
           }
            else if (userGuess > randomNumber){
             lowOrHi.innerHTML = "Last guess was too high!";
         }
       }
       guessCount++;
       guessField.value = '';
       
       
       guessField.focus();
}
guessSubmit.addEventListener('click', checkGuess);

function setGameover(){
    guessField.disabled = true;
    guessSubmit.disabled = true;
    
     //jQ 3
      $("#reset").css({ "display": "inline"});
      //resetButton.style.display = 'inline';
    
    
    resetButton.addEventListener('click', resetGame);
}

function resetGame() {
    guessCount = 1;
    var resetParas = document.querySelectorAll('.resultParas p');
    for (var  i= 0; i < resetParas.length; i++){
        resetParas[i].textContent = '';
    }
    
     //JQ 4
    $("#reset").css("display", "none");
    //resetButton.style.display = 'none';
    
    guessField.disabled = false;
    guessSubmit.disabled = false;
    guessField.value = '';
    guessField.focus();
    
    
    //JQ 5
     $("#lastResult").css({ "background-color": "white"});
     //lastResult.style.backgroundColor = 'white';
    
    randomNumber = Math.floor(Math.random()*99) + 1;
    
}
