<?php session_start();

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
<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);  
?>



<?php
    $html = new joinScreen();

    switch ($_SESSION['isValid']) {

        case "usernameInvalid":
            echo $html->showInvalidUserScreen();
            break;

        case "valid":
            echo $html->showValidUserScreen();
            break;

            default:
                echo $html->showValidUserScreen();
                break;

    }


?>



</body>
</html>
