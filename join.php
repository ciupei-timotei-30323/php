<?php session_start();

unset($_SESSION['isValidLogin']);
unset($_SESSION['Day']);

require "joinScreen.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Sign-up</title>
  <link rel="stylesheet" href="style.php">
</head>
<body>



<!--Debugging-->
<?php //ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ERROR);
//?>



<?php
    $html = new joinScreen();

echo match ($_SESSION['isValid']) {
    "usernameInvalid" => $html->showInvalidUserScreen(),
    "passwdInvalid" => $html->showUnmatchedPsswdScreen(),
    default => $html->showValidUserScreen(),
};

?>



</body>
</html>
