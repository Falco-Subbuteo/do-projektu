<?php
require("questions.php");
if(!isset($_SESSION)){
    session_start();
}

$_SESSION['username'] = $_POST['username'];
$_SESSION['logged'] = true;
$_SESSION['currentQuestion'] = getQuestion(0);

header("Location: /milionerzy/milionerzy.php");
die();
