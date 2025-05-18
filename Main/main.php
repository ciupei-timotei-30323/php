<?php
namespace Main;
session_start();

use DateTime;
use DateInterval;

require_once "CliUserInterface.php";
require_once "db.php";
require_once "scheduleSetup.php";

// Verifying that the user is logged in
if($_SESSION['isLogged'] != "true") {
    header("location: ../index.php");
}

// if the 'Day' session token is not initialized
if(!isset($_SESSION['Day'])) {

    $_SESSION['Day'] = (new DateTime('now'))->format('Y-m-d');
    $userDate = new DateTime($_SESSION['Day']);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="../mainStyle.css">
    <title>Reserve</title>
</head>
<body>

<div class="top-bar">
    <a class="submit-btn" href="../Reservations/myReservations.php" style="text-decoration: none;">My Reservation</a>
</div>

<?php

// setting the schedule

// connecting to db
$db = db::getDb();

// setting the actual current day
$currentDay = (new DateTime('now'))->setTime(0, 0, 0);

// max days for the schedule to generate
$maxDays = new DateInterval("P7D");

// the date where the user is
$userDate = DateTime::createFromFormat('Y-m-d', $_SESSION['Day']);

// what is the first hour of the day
$firstHour = (clone $userDate)->setTime(8,0,0);

// how many hours in the day
$shiftLength = new DateInterval("PT4H");


$increment = new DateInterval("PT30M");

$scheduleSetup = new scheduleSetup($currentDay, $maxDays, $userDate, $firstHour, $shiftLength, $increment);
$cli = new CliUserInterface($scheduleSetup);
?>

<div class="main-content">
    <div class="container">
        <div class="header-row">

     <?php echo $cli->seeToday($db); ?>



</body>
</html>

