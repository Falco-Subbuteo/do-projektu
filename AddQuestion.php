<?php
require("QuestionsRepository.php");
require("Question.php");
if (!isset($_SESSION)) {
    session_start();
}

$question = new Question();
$question->question = $_POST['question'];
$question->answers[0] = $_POST['answer0'];
$question->answers[1] = $_POST['answer1'];
$question->answers[2] = $_POST['answer2'];
$question->answers[3] = $_POST['answer3'];
$question->correctAnswerIndex = $_POST['correctAnswer'];

$questionRepository = QuestionReposiory::getInstance();
$questionRepository::addQuestion($question);

header("Location: QuestionsPanel.php");
die();
