<!--this is where the actual reservation is done-->
<?php
session_start();
require "dbConnect.php";


// var_dump($_POST['op']);

$db = getDB();


function addResevation($userId, $date, $msg, mysqli $db): int
{

    $query = "INSERT INTO reserved_dates (idUser, date, message) VALUES ('".$userId."', STR_TO_DATE('".$date."', '%Y-%d-%m %H:%i'), '".$msg."')";

    $db->query($query);


    return $db->insert_id;

}

$id = addResevation($_SESSION['userId'], $_SESSION['slot'], $_POST['message'], $db);


function addOptions($optionsArray, $idRes, mysqli $db) : void {


    $fullQuery = "";
    $names = "";
    $values = "";
    $query1 = "INSERT INTO options (idRes %option%) VALUES ";
    $query2 = "('".$idRes."' %optionValue%)";

    foreach($optionsArray as $option)
    {
        $names .= ", " .$option;
        $values .= ", " . "'".$option."'";

    }

    $fullQuery .= str_replace("%option%", $names, $query1);

    $fullQuery .= str_replace("%optionValue%", $values, $query2);
    

    // $i = 0;
    // foreach($optionsArray as $option)
    // {
    //     if($i == 0)
    //     {
    //         $fullQuery .= str_replace(array("%option%", "%optionValue%"), "'".$option."'", $query);
    //         $i += 1;
    //     }
    //     else{

    //         $fullQuery .= " AND ";

    //         $fullQuery .= str_replace(array("%option%", "%optionValue%"), "'".$option."'", $query);

    //         $i += 1;
    //     }
    // }

    $db->query($fullQuery);
    
}

addOptions($_POST['op'], $id, $db);

header("Location: Main/main.php");



?>
