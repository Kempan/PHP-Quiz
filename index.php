<?php 
include 'question.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>QUIZ TIME!</h1>
<?php
    echo "<form action='results.php' method='post'>";

    /*
    echo "Question 1:<br> $quest1->question<br>";
    echo "Zlatan <input type='checkbox' name='zlatan' value='false'>";
    echo "Taco <input type='checkbox' name='taco' value='false'>";
    echo "Kim <input type='checkbox' name='kim' value='false'><br><br>";
    echo "Question 2:<br> $quest2->question<br>";
    echo "Sylvester Stalone <input type='checkbox' name='zlatan' value='false'>";
    echo "Elon musk <input type='checkbox' name='elon_musk' value='false'>";
    echo "Poccahontas <input type='checkbox' name='kim' value='false'><br><br>";
    echo "Question 3:<br> $quest3->question<br>";
    echo "Builder Bob <input type='checkbox' name='zlatan' value='false'>";
    echo "Vladimir Putin <input type='checkbox' name='putin' value='false'>";
    echo "Joakim Edwardh <input type='checkbox' name='kim' value='false'><br><br>";
    echo "Question 4:<br> $quest4->question<br>";
    echo "'Red' <input type='checkbox' name='zlatan' value='false'>";
    echo "'Yellow' <input type='checkbox' name='taco' value='false'>";
    echo "'Green' <input type='checkbox' name='green' value='false'><br><br>";
    echo "Question 5:<br> $quest5->question<br>";
    echo "Victor <input type='checkbox' name='victor' value='true'>";
    echo "King of JavaScript <input type='checkbox' name='victor' value='true'>";
    echo "Akademisk kvart-i-Victor <input type='checkbox' name='victor' value='true'><br><br>";
    */
    
    echo "Question 1:<br> $quest1->question<br>";
    echo "Answer: <input type='text' name='answer1'><br><br>";
    echo "Question 2:<br> $quest2->question<br>";
    echo "Answer: <input type='text' name='answer2'><br><br>";
    echo "Question 3:<br> $quest3->question<br>";
    echo "Answer: <input type='text' name='answer3'><br><br>";
    echo "Question 4:<br> $quest4->question<br>";
    echo "Answer: <input type='text' name='answer4'><br><br>";
    echo "Question 5:<br> $quest5->question<br>";
    echo "Answer: <input type='text' name='answer5'><br><br>";
    echo "<input type='submit' value='Rätta'>";
    echo "<form>";
?>
</body>
</html>