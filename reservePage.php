<?php
session_start();
?>
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

            <div class="header-title">A few more details about your reservation</div>

        </div>

        <form action="reserve.php" method="post">

            <div class="form-row-neutral">
                <label class="radio-label">
                    <input type="checkbox" name="option" value="option1">
                    Option 1
                </label>
            </div>
            <div class="form-row-neutral">
                <label class="radio-label">
                    <input type="checkbox" name="option" value="option2">
                    Option 2
                </label>
            </div>
            <div class="form-row-neutral">
                <label class="radio-label">
                    <input type="checkbox" name="option" value="option3">
                    Option 3
                </label>
            </div>
            <div class="form-row-neutral">
                <label class="radio-label">
                    <input type="checkbox" name="option" value="option4">
                    Option 4
                </label>
            </div>
            <label>
                <textarea name="message" placeholder="Enter a message (optional)"></textarea>
            </label>
            <button class="submit-btn" type="submit">Reserve on <?php echo $_POST['slot']?></button>
        </form>
        <a href="Main/main.php" class="submit-btn">Cancel</a>

    </div>
</div>
</body>
</html>


<?php
// transferring the POST var to a SESSIon one bc otheriwise it will be lost in the next page
$_SESSION['slot'] = $_POST['slot'];

?>