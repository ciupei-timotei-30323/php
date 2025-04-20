<!--this is where the actual reservation is done-->
<?php
session_start();
require "dbConnect.php";

function addResevation($userId, $date, $msg)
{
    $db = getDb();

    $query = "INSERT INTO reserved_dates (idUser, date, message) VALUES ('$userId', '$date', '$msg')";

    $db->query($query);

    $db->close();
}
var_dump($_SESSION['userId']);
addResevation($_SESSION['userId'], (int)$_POST['slot'], $_POST['message']);
header("Location: main.php");

?>
