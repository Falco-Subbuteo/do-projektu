<?php
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION['endGame'] = true;
$_SESSION['isWon'] = true;

for ($i = $_SESSION['currentQuestionNumber']; $i >= 0; $i--) {
    for ($j = 0; $j < sizeof($_SESSION['questions'][$i]); $j++) {
        if ($_SESSION['questions'][$i][$j]['guaranteed']) {
            $_SESSION['wonSum'] = $_SESSION['moneyOptions'][$i];
            header("Location: /milionerzy/milionerzy.php");
            die();
        }
    }
}

header("Location: /milionerzy/milionerzy.php");
die();