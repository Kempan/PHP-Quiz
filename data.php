<?php

class Question{

    function __construct($question, $answer, $id){
        $this->question = $question;
        $this->answer = $answer;
        $this->id = $id;
    }

}

$content = array(
$quest1 = new Question("Swedens best fotball player?", "zlatan", 1),
$quest2 = new Question("Who created Tesla?", "elon musk", 2),
$quest3 = new Question("Russians presidents last name?", "putin", 3),
$quest4 = new Question("How does 'green' spell?", "green", 4),
$quest5 = new Question("Our back-end teachers first name?", "victor", 5)
);


?>