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

<style>

    label {
        display: block;
        width: 100%;
        max-width: 300px;
        margin: 1rem auto; /* centers horizontally */
        font-size: 1rem;
    }

    label textarea {
        width: 100%;
        height: 120px;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        background-color: #eee;
        border: 2px solid #000;
        color: #000;
        box-sizing: border-box;
        resize: none;
        outline: none;
    }

    label textarea:focus {
        background-color: #fff;
        border-color: #333;
    }



</style>



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

            <label>
                <textarea name="message" placeholder="Enter your message (optional)"></textarea>
            </label>
            <button class="submit-btn" type="submit">Reserve on <?php echo $_POST['slot']?></button>
        </form>
        <a href="main.php" class="submit-btn">Cancel</a>

    </div>
</div>
</body>
</html>


<?php
// transferring the POST var to a SESSIon one bc otheriwise it will be lost in the next page
$_SESSION['slot'] = $_POST['slot'];

?>