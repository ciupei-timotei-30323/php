<?php
namespace Main;
session_start();

use DateTime;
use DateInterval;

require_once "CliUserInterface.php";
require_once "db.php";
require_once "scheduleSetup.php";

if($_SESSION['isLogged'] != "true") {
    header("location: ../index.php");
}

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
    <title>Test</title>
</head>
<body>

<div class="top-bar">
    <button>My Reservations</button>
</div>

<?php
// setting the schedule
$db = db::getDb();
$currentDay = (new DateTime('now'))->setTime(0, 0, 0);
$maxDays = new DateInterval("P7D");
$userDate = DateTime::createFromFormat('Y-m-d', $_SESSION['Day']);
$firstHour = (clone $userDate)->setTime(8,0,0);
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

