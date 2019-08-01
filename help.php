<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['currentHelp']) || isset($_SESSION['usedHelps'][$_GET['id']])) {
    header("Location: /milionerzy/milionerzy.php");
    die();
}

$_SESSION['currentHelp'] = $_SESSION['currentQuestion']['correctAnswer'];
$_SESSION['usedHelps'][$_SESSION['currentHelp']] = $_SESSION['currentHelp'];

header("Location: /milionerzy/milionerzy.php");
die();