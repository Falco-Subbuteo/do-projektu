<?php
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION['moneyOptions'][0] = "500";
$_SESSION['moneyOptions'][1] = "1000";
$_SESSION['moneyOptions'][2] = "2000";
$_SESSION['moneyOptions'][3] = "5000";
$_SESSION['moneyOptions'][4] = "10000";
$_SESSION['moneyOptions'][5] = "20000";
$_SESSION['moneyOptions'][6] = "40000";
$_SESSION['moneyOptions'][7] = "75000";
$_SESSION['moneyOptions'][8] = "125000";
$_SESSION['moneyOptions'][9] = "250000";
$_SESSION['moneyOptions'][10] = "500000";
$_SESSION['moneyOptions'][11] = "1000000";
