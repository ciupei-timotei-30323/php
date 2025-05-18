<?php
session_start();
use Main\db;
use Main\queryGenerator;

require "../Main/db.php";
require_once "../Main/queryGenerator.php";

if(!isset($_POST['slot'])){
    header("location: myReservations.php");
}
$db = db::getDB();

//$queryGenerator = new queryGenerator("DELETE FROM reserved_dates WHERE idUser = '" . $_SESSION['userId'] . "'" AND date = '" . STR_TO_DATE(.$_POST['date']., '%Y-%d-%m %H:%i'));

$queryGenerator = new queryGenerator(
    "DELETE FROM reserved_dates WHERE idUser = '" . $_SESSION['userId'] . "' AND date = STR_TO_DATE('" . $_POST['slot'] . "', '%Y-%d-%m %H:%i')"
);

//var_dump($queryGenerator);
//var_dump($_POST["slot"]);
try {
    $queryGenerator->applyQuery($db);
    header("location: myReservations.php");

}catch (Exception $e){
    header("location: myReservations.php");

}

?>