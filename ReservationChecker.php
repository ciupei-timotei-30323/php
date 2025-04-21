<?php

require "dbConnect.php";
class ReservationChecker
{

    private mixed $checkedDate;


    private mixed $isDateFree;
    /**
     * @param $checkedDate
     */
    public function __construct($checkedDate)
    {
        $this->checkedDate = $checkedDate;
    }




    /**
     * @return mixed
     */
    public function getIsDateFree(): mixed
    {
        return $this->isDateFree;
    }

    /**
     * @return mixed
     */
    public function getCheckedDate(): mixed
    {
        return $this->checkedDate;
    }




    public function addOneHour(): void
    {
        $this->checkedDate->add(new DateInterval('PT1H'));
    }


    // Checks if a given date(day and hour) is free or not
    public function isDateFree(): bool
    {
        $db = getDB();

        $query = "SELECT date FROM reserved_dates WHERE DAY(date) = '" . $this->checkedDate->format("d") . "' AND HOUR(date) = '" . $this->checkedDate->format("H") . "';";
        $result = $db->query($query);

//        $db->close();
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


