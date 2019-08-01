<?php
require("questions.php");
if (!isset($_SESSION)) {
    session_start();
}

session_unset();
header("Location: /milionerzy/milionerzy.php");
die();