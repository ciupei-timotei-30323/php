<?php

require "dbConnect.php";
class ReservationChecker
{

    private $checkedDate;


    private $isDateFree;
    /**
     * @param $checkedDate
     */
    public function __construct($checkedDate)
    {
        $this->checkedDate = $checkedDate;
    }

    /**
     * @param mixed $checkedDate
     */
    public function setCheckedDate($checkedDate)
    {
        $this->checkedDate = $checkedDate;
    }

    /**
     * @return mixed
     */
    public function getIsDateFree()
    {
        return $this->isDateFree;
    }





    // Checks if a given date(day and hour) is free or not
    public function isDateFree()
    {
        $db = getDB();

        $query = "SELECT date FROM reserved_dates WHERE DAY(date) = '" . $this->checkedDate->format("d") . "' AND HOUR(date) = '" . $this->checkedDate->format("H") . "';";
        $result = $db->query($query);

        $db->close();
        if ($result->num_rows > 0) {
            $this->isDateFree = false;
            return false;
        }
        else {
            $this->isDateFree = true;
            return true;
        }
    }




}


?>