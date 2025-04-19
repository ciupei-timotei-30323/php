<?php session_start();

unset($_SESSION['Day']);

header("Location: main.php");

?>