<?php
include 'question.php';

$correctAnswers = 0;
$wrongAnswers = 0;

echo "<h1>Quiz answers!</h1>";

foreach($content as $question){
    if(strtolower($_POST["answer$question->id"]) == $question->answer){
        echo "<p>$question->question<br>You answered $question->answer. That is Correct!</p>";
        $correctAnswers += 1;
    } else {
        echo $question->question . '<br>You answered: ' . $_POST["answer$question->id"] . '. That is Wrong!';
        $wrongAnswers += 1;
    }
}

echo "You answered $correctAnswers question(s) correct and $wrongAnswers question(s) wrong.<br><br>";


/*

foreach($content as $question){
    if($_POST["$question->answer"] == true){
        echo "<p>$question->question<br>Answer: $question->answer<br><br>";
        $correctAnswers += 1;
    } else {
        echo "<p>$question->question<br>Wrong!<br><br>";
        $wrongAnswers += 1;
    }
}

echo "You answered $correctAnswers question(s) correct and $wrongAnswers question(s) wrong.";
*/
?>