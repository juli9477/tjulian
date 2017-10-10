<?php
$mix ="no"; 


$quiz = array(
1 => array(
   0 => "What year do the events of the first season take place in?",
   1 => "1983",
   2 => "1970",
   3 => "1987",
   4 => "1850",
   5 => "None",
   6 => 1
),
2 => array(
   0 => "What is the name of the unusual disorder Dustin has?",
   1 => "Epidermolysis",
   2 => "Cleidocranial dysplasia",
   3 => "Hydrocephalus",
   4 => "Asthma",
   6 => 2
),
3 => array(
   0 => "The mysterious research facility responsible for kidnapping Eleven and unleashing the monster poses as:",
   1 => "The Department of Homeland Security",
   2 => "The Department of Energy",
   3 => "The Department of Defense",
   4 => "The Department of Health",
   6 => 2
),
4 => array(
   0 => "What is the nickname the kids have for the monster?",
   1 => "Demogorgon",
   2 => "Orthros",
   3 => "Goblins",
   4 => "Stone Giants",
   6 => 1
),
5 => array(
   0 => "What is the Tolkien-themed nickname for where Will disappeared?",
   1 => "Mirkwood",
   2 => "Wonderland",
   3 => "Rivendell",
   4 => "Enchanted Forest",
   6 => 1
),
6 => array(
   0 => "What is Elevens favorite food?",
   1 => "Hot Pockets",
   2 => "Eggo Waffles ",
   3 => "PopTarts",
   4 => "Cheetos",
   6 => 2
),
7 => array(
   0 => "Select character that entered the Up -Side Down World first?",
   1 => "Joyce",
   2 => "Nancy",
   3 => "Dustin",
   4 => "Steve",
   6 => 1
),
);

$max=7;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($mix =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percent=0;
        }else{
        $percent= Round(100*$ok / $question);
        }
?>

<html>
    <head>
    <title>Multiple Choice Questions></title>

<SCRIPT>
function Goahead (number){
        if (document.percent.response.value==0){
                if (number==<?php print $quiz[$randval2][6] ; ?>){
                        document.percent.response.value=1
                        document.percent.question.value++
                        document.percent.ok.value++
                }else{
                        document.percent.response.value=1
                        document.percent.question.value++
                }
        }
       
}

</SCRIPT>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <style> @import url("css/styles.css");</style>
</head>
<div class="container">
<div class = "row">
<div class = "col-md-15 col-xs-20">

<img src="img/img.jpg" class="img-reponsive"> 

</div>
</div>
</div>

<img src="img/logo.png">


<h1> Quiz </h1>
 
  
<?php if ($question<$max){ ?>


<FORM METHOD=POST NAME="percent" ACTION="<?php print $URL; ?>">

<br> 
<br><input type=submit value="Next">
<input type=hidden name=response value=0>
<input type=hidden name=question value= <?php print $question; ?>>
<input type=hidden name=ok value=<?php print $ok; ?>>
<input type=hidden name=Randon value=<?php print $randval; ?>>
<br><?php print $question+1; ?> / <?php print $max; ?>
</FORM>




<FORM METHOD=POST NAME="question" ACTION="">
<?php print "<b>".$quiz[$randval2][0]."</b>"; ?>
 
<br> <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $quiz[$randval2][1] ; ?>
<br> <INPUT TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $quiz[$randval2][2] ; ?>
<?php if ($quiz[$randval2][3]!=""){ ?>
<br> <INPUT TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $quiz[$randval2][3] ; } ?>
<?php if ($quiz[$randval2][4]!=""){ ?>
<br> <INPUT TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $quiz[$randval2][4] ; } ?>
<?php if ($quiz[7][5]!=""){ ?>
<br> <INPUT TYPE=checkbox NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $quiz[$randval2][5] ; } ?>







</FORM>

<?php
}else{
?>

The Quiz has finished
<br>Percent of correct responses: <?php print $percent ; ?> %
<

<a class="btn btn default" href="index.php">Home Page</a>

<?php } ?>





</body>
</html>