<?php session_start();

unset($_SESSION['Day']);

header("Location: Main/main.php");

