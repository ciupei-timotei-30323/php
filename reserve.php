<!--this is where the actual reservation is done-->
<?php
session_start();
require "dbConnect.php";

function addResevation($userId, $date, $msg): void
{
    $db = getDb();

    $query = "INSERT INTO reserved_dates (idUser, date, message) VALUES ('".$userId."', STR_TO_DATE('".$date."', '%Y-%d-%m %H:%i'), '".$msg."')";

    $db->query($query);

//    $db->close();
}
addResevation($_SESSION['userId'], $_SESSION['slot'], $_POST['message']);
header("Location: Main/main.php");

?>
