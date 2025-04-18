<?php
session_start();
// this is such that only validated users can acces this page
if($_SESSION['isValid'] != "valid")
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
  <title>Weekday Boxes</title>
  <h1>

  <!-- show the current week -->
<?php 

    echo $startOfWeek->format('d/m') . " - " . $endOfWeek->format('d/m');

?>

  </h1>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fafafa;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .week-container {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 24px;
      max-width: 90vw;
    }

    .day-column {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .day-title {
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 8px;
      color: #333;
    }

    .box {
      width: 50px;
      height: 50px;
      margin: 4px 0;
      background-color: #eaeaea;
      border-radius: 6px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 14px;
      color: #333;
      cursor: pointer;
      transition: background-color 0.2s ease;
      user-select: none;
    }

    .box:hover {
      background-color: #ccc;
    }

    .box:active {
      background-color: #999;
    }
  </style>
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
