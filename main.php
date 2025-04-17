<?php
session_start()

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Main</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>

<p>
    Hello Worlds!
    <?php
    echo
    $_SESSION["isValid"];

    ?>
</p>

</body>