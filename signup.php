<?php session_start();


global $db;
require "dbConnect.php";

function isUserValid(): bool
{
    global $db;

    $username = trim($_POST['name']);

    $query = "SELECT name FROM users WHERE name = '$username'";

    $result = $db->query($query);

    if($result->num_rows > 0)
    {
        $isValid = false;
    }
    else
        $isValid = true;
    return $isValid;
}





if(isUserValid())
{
    $_SESSION['isValid'] = "valid";
    header("location: main.php");
    die();
}
else {
    $_SESSION['isValid'] = "usernameInvalid";
    header("location: join.php");
    die();
}









