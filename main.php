<?php
session_start();
unset($_SESSION['isLoggedIn']);
// this is such that only validated users can acces this page
if($_SESSION['isLogged'] != "true") {
    header("location: index.php");
}

//Dependencies
require "DailyBoxTemplate.php";
require "ReservationChecker.php";
require "generateTimeButtons.php";


//Objects and Sessions initializations
// This takes care of the time manipulation by user
// The forward/backward in time buttons are controlled from here
if(isset($_SESSION['Day'])) {

    // the day the user got to while searching
    $today = DateTime::createFromFormat('Y-m-d', $_SESSION['Day']);

    // Current irl day
    $currentDay = new DateTime('now');

    // A date 2 weeks ahead of today;
    $buff = clone $currentDay;
    $twoWeeksFuture = $buff->add(new DateInterval('P1W'));

    // checks is the user got to a day in the past or today
    // stops the user from going into the past
    if($today <= $currentDay) {
        $isYesterdayBlocked = true;
    }

    // stops user from going into the >1 week future
    elseif ($today >= $twoWeeksFuture) {
        $isTomorrowBlocked = true;
    }

    else
    {
        $isYesterdayBlocked = false;
    }

}

// If Session token is not initialized, do it with the current date
else
{
    $isYesterdayBlocked = true;
    $isTomorrowBlocked = false;
    $today = new DateTime('now');
    $_SESSION['Day'] = $today->format('Y-m-d');
}

// Here the buttons get generated
$timeButtons = new GenerateTimeButtons($isTomorrowBlocked,$isYesterdayBlocked);

?>

<!--The user chooses a day which it wants to reserve.-->
<!--Then, the free hours of that day will be shown in the dropdown menu-->
<!--Also, the table with all the hours in the selected week-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainStyle.css">
    <title>Reservation</title>
</head>
<body>
<div class="top-bar">
    <button>My Reservations</button>
</div>

<div class="main-content">
    <div class="container">
        <div class="header-row">

            <?php echo $timeButtons->getFinalHtmlYestrdy();?>
            <div class="header-title">Reserve on <?php echo $today->format('m-d')?></div>
            <?php echo $timeButtons->getFinalHtmlTmmrw();?>

        </div>

        <form method="post">
            <?php

            ?>
            <button class="submit-btn" type="submit">Submit</button>
        </form>
        <a href="resetTime.php" class="submit-btn">Reset</a>
    </div>
</div>
</body>
</html>

