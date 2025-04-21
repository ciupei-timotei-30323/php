<?php session_start();

$currentDay = DateTime::createFromFormat('Y-m-d', $_SESSION['Day']);
$_SESSION['Day'] = $currentDay->add(new DateInterval('P1D'))->format('Y-m-d');
header("Location: main.php");





