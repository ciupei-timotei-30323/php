<?php
session_start();
// this is such that only validated users can acces this page
if($_SESSION['isValid'] != "valid" && $_SESSION['isValidLogin'] != "valid")
{
    header("location: index.php");
}


$today = new DateTime('now');

$startOfWeek = clone $today;

$startOfWeek->modify('monday this week');

$endOfWeek = clone $today;

$endOfWeek->modify('sunday this week');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="mainStyle.css">
  <title>Weekday Boxes</title>
  <h1>

  <!-- show the current week -->
<?php 

    echo $startOfWeek->format('d/m') . " - " . $endOfWeek->format('d/m');

?>

  </h1>
</head>
<body>

  <div class="week-container">
    <div class="day-column">
      <div class="day-title">Mon</div>
      <div class="box">08:00</div>
      <div class="box">09:00</div>
      <div class="box">10:00</div>
      <div class="box">11:00</div>
      <div class="box">12:00</div>
      <div class="box">13:00</div>
      <div class="box">14:00</div>
      <div class="box">15:00</div>
    </div>
    <div class="day-column">
      <div class="day-title">Tue</div>
      <div class="box">1</div>
      <div class="box">2</div>
      <div class="box">3</div>
      <div class="box">4</div>
      <div class="box">5</div>
      <div class="box">6</div>
      <div class="box">7</div>
      <div class="box">8</div>
    </div>
    <div class="day-column">
      <div class="day-title">Wed</div>
      <div class="box">1</div>
      <div class="box">2</div>
      <div class="box">3</div>
      <div class="box">4</div>
      <div class="box">5</div>
      <div class="box">6</div>
      <div class="box">7</div>
      <div class="box">8</div>
    </div>
    <div class="day-column">
      <div class="day-title">Thu</div>
      <div class="box">1</div>
      <div class="box">2</div>
      <div class="box">3</div>
      <div class="box">4</div>
      <div class="box">5</div>
      <div class="box">6</div>
      <div class="box">7</div>
      <div class="box">8</div>
    </div>
    <div class="day-column">
      <div class="day-title">Fri</div>
      <div class="box">1</div>
      <div class="box">2</div>
      <div class="box">3</div>
      <div class="box">4</div>
      <div class="box">5</div>
      <div class="box">6</div>
      <div class="box">7</div>
      <div class="box">8</div>
    </div>
    <div class="day-column">
      <div class="day-title">Sat</div>
      <div class="box">1</div>
      <div class="box">2</div>
      <div class="box">3</div>
      <div class="box">4</div>
      <div class="box">5</div>
      <div class="box">6</div>
      <div class="box">7</div>
      <div class="box">8</div>
    </div>
    <div class="day-column">
      <div class="day-title">Sun</div>
      <div class="box">1</div>
      <div class="box">2</div>
      <div class="box">3</div>
      <div class="box">4</div>
      <div class="box">5</div>
      <div class="box">6</div>
      <div class="box">7</div>
      <div class="box">8</div>
    </div>
  </div>

</body>
</html>
