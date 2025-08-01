<?php
namespace Reservations;
use Main\db;

session_start();


require_once "CliUserInterfaceReservations.php";
require_once "UserSetup.php";
require "../Main/db.php";


// Verifying that the user is logged in
if($_SESSION['isLogged'] != 'true') {
    header("location: ../index.php");
}

$_POST['slot'] = "";
$db = db::getDb();

$setting = new UserSetup($_SESSION['userId']);
$reservations = new CliUserInterfaceReservations($setting, $db);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mainStyle.css">
    <title>Reservation</title>
</head>

<body>
    <div class="top-bar">
        <a class="submit-btn" href="../Main/main.php" style="text-decoration: none;">Back</a>
    </div>
    <div class="main-content">
        <div class="container">

            <form action="cancelReservation.php" method="post">
                <div class="header-row">

                    <div class="header-title">Future reservations</div>

                </div>
                <?php echo $reservations->seeReservations(); ?>
                <!-- HTML TO BE GENERATED -->


<!--                <button class="submit-btn" type="submit">Cancel reservation</button>-->
<!---->
<!---->
<!--            </form>-->
<!---->
<!--            <div style="gap: 0.5rem;-->
<!--            display: flex;-->
<!--            flex-direction: column;-->
<!--            font-weight : bold;">-->
<!--                <div class="header-row" style="margin-top: 2rem;">-->
<!---->
<!--                    <div class="header-title">Past/Canceled reservations</div>-->
<!---->
<!--                </div>-->

                <!-- HTML TO BE GENERATED -->

            </div>
        </div>

    </div>

</body>

</html>