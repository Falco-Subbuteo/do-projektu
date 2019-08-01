<?php
require("questions.php");
if (!isset($_SESSION)) {
    session_start();
}

$question = $_SESSION['currentQuestion'];
$checkedAnswer = $_POST['checkedAnswer'];

unset($_SESSION['currentHelp']);

if ($question['correctAnswer'] != $checkedAnswer) {
    $_SESSION['endGame'] = true;
    $_SESSION['isWon'] = false;
    header("Location: /milionerzy/milionerzy.php");
    die();
}

if ($_SESSION['currentQuestionNumber'] == 11) {
    $_SESSION['endGame'] = true;
    $_SESSION['isWon'] = true;
    header("Location: /milionerzy/milionerzy.php");
    die();
}

$_SESSION['currentQuestionNumber'] = $_SESSION['currentQuestionNumber'] + 1;
$_SESSION['currentQuestion'] = getQuestion($_SESSION['currentQuestionNumber']);

header("Location: /milionerzy/milionerzy.php");
die();