<?php
include 'index.php';

$correctAnswers = 0;
$wrongAnswers = 0;

echo "<div class='content'>";
echo "<div class='wrapper'>";
echo "<h1>Quiz answers!</h1>";

foreach($content as $question){
    if(strtolower($_POST["answer$question->id"]) == $question->answer){
        echo "<p>$question->question<br>You answered $question->answer. That is Correct!</p>";
        $correctAnswers += 1;
    } else {
        echo '<p id="hej">' . $question->question . '<br>You answered: ' . $_POST["answer$question->id"] . '. That is Wrong!<br>';
        echo ' The correct answer is "' . $question->answer . '".</p><br>';
        $wrongAnswers += 1;
    }
}

echo "<h1>You answered $correctAnswers question(s) correct and $wrongAnswers question(s) wrong.</h1>";
echo "</div></div>";

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
include 'footer.php';
?>