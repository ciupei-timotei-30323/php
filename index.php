<?php session_start();
require "loginScreen.php";
unset($_SESSION['isValid']);
unset($_SESSION['Day']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Login</title>
  <link rel="stylesheet" href="style.php">
</head>
<body>



<?php

$html = new loginScreen();

echo match ($_SESSION['isValidLogin']) {
    "usernameInvalid" => $html->getHtmlCodeInvalidUser(),
    "passwdInvalid" => $html->getHtmlCodeInvalidPasswd(),
    default => $html->getHtmlCodeValidLogin(),
};

?>




</body>
</html>







