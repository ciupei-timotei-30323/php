<?php session_start();


require "dbConnect.php";

// WORKS
// returns true when username is found in the DB, false otherwise
function isUserValid(): bool
{
    $db = getDB();

    $username = htmlspecialchars(trim($_POST['name']));

    $query = "SELECT name FROM users WHERE name = '$username'";

    $result = $db->query($query);


    // closing the db connection
    $db->close();

    if($result->num_rows > 0)
    {
        $_SESSION['name'] = $username;
        $isValid = true;
    }
    else{
        $isValid = false;
    }
    return $isValid;
}


function isPasswdValid($name) : bool
{
    $db = getDB();

    $passwd = htmlspecialchars(trim($_POST['passwd']));

    $query = "SELECT passwd FROM users WHERE name = '$name'";

    $result = $db->query($query);
    $db->close();

    $result = (string) $result->fetch_assoc()['passwd'];
    //Warning:  Trying to access array offset on value of type null
    if(strcmp($passwd,$result) == 0)
    {
        $_SESSION['passwd'] = $passwd;
        return true;
    }
    else
    {
        return false;
    }
}



if(!isUserValid())
{
//    Unsetting the passwd and username as one of these is not correct
    unset($_SESSION['name']);
    unset($_SESSION['passwd']);

    // Sending the invalid message to the join.php through the $_SESSION variable
    $_SESSION['isValidLogin'] = "usernameInvalid";
    header("location: index.php");
    die();
}

else if(!isPasswdValid($_SESSION['name']))
{

//    Unsetting the passwd and username as one of these is not correct
    unset($_SESSION['passwd']);
    unset($_SESSION['name']);


    // Sending the invalid message to the join.php through the $_SESSION variable
    $_SESSION['isValidLogin'] = "passwdInvalid";
    header("location: index.php");
    die();
}

else {

    $_SESSION['isValidLogin'] = "valid";
    header("location: main.php");
    die();
}




?>