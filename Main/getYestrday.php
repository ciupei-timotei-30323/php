<?php session_start();
//
//$currentDay = DateTime::createFromFormat('Y-m-d', $_SESSION['Day']);
//$_SESSION['Day'] = $currentDay->sub(new DateInterval('P1D'))->format('Y-m-d');

$_SESSION['Day'] = DateTime::createFromFormat('Y-m-d', $_SESSION['Day'])->sub(new DateInterval('P1D'))->format('Y-m-d');
header("Location: main.php");