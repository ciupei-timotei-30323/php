<?php session_start();


require "dbConnect.php";

function isUserValid(): bool
{
    $db = getDB();

    $username = htmlspecialchars(trim($_POST["name"]));

    $query = "SELECT name FROM users WHERE name = '$username'";

    $result = $db->query($query);

    // closing the db connection
    $db->close();

    if($result->num_rows > 0)
    {
        $isValid = false;
    }
    else{
        $_SESSION['name'] = $username;
        $isValid = true;
    }
    return $isValid;
}


function getUserId($name): void
{
    $db = getDB();

    $query = "SELECT no FROM users WHERE name = '$name'";

    $result = $db->query($query);

    $db->close();

    $_SESSION['userId'] = $result->fetch_assoc()['no'];
}

function isPasswdValid() : bool
{
    $passwd = htmlspecialchars(trim($_POST['passwd']));
    $repasswd = trim($_POST['repasswd']);


    if($passwd == $repasswd)
    {
        $_SESSION['passwd'] = $passwd;
        return true;
    }
    else
    {
        return false;
    }
}

function insertUser($name, $passwd): void
{
    $db = getDB();

    $query = "INSERT INTO users (name, passwd) VALUES ('$name', '$passwd')";


    $db->query($query);

    //finding the id and putting it in the Session token
    $idQuery = "SELECT no FROM users WHERE name = '$name'";
    $result = $db->query($idQuery);
    $_SESSION['userId'] = $result->fetch_assoc()['no'];


    $db->close();

}

if(!isUserValid())
{
//    Unsetting the passwd and username as one of these is not correct
    unset($_SESSION['name']);
    unset($_SESSION['passwd']);

    // Sending the invalid message to the join.php through the $_SESSION variable
    $_SESSION['isValid'] = "usernameInvalid";
    header("location: join.php");
    die();
}

else if(!isPasswdValid())
{

//    Unsetting the passwd and username as one of these is not correct
    unset($_SESSION['passwd']);
    unset($_SESSION['name']);


    // Sending the invalid message to the join.php through the $_SESSION variable
    $_SESSION['isValid'] = "passwdInvalid";
    header("location: join.php");
    die();
}

else {

    insertUser($_POST['name'], $_POST['passwd']);



    getUserId($_SESSION['name']);
    $_SESSION['isLogged'] = "true";
    header("location: main.php");
    die();
}









