<?php

namespace Reservations;

use DateTime;

require_once "rowsHtml.php";
class rowsGenerator{

    private string $futureRows;
    private string $pastRows;

    private $reservations;

    private rowsHtml $rowsHtml;

    /**
     * @param array $reservations
     */
    public function __construct(array $reservations)
    {
        $this->reservations = $reservations;
        $this->rowsHtml = new rowsHtml();
        $this->pastRows = "";
        $this->futureRows = "";
    }




    public function generate(DateTime $today)
    {

        // in case there's no future or past reservation
        if(count($this->reservations) < 1){

            $this->futureRows = $this->rowsHtml->getEmptySlot();
            $this->pastRows = $this->rowsHtml->getEmptySlot();
        }
        else {
            for ($i = 0; $i < count($this->reservations); $i++) {

                $day = DateTime::createFromFormat("Y-m-d H:i:s", $this->reservations[$i]['date']);

                if ($day <= $today) {
                    $this->pastRows .= $this->rowsHtml->getSlot($day, "1");
                } else {
                    $this->futureRows .= $this->rowsHtml->getSlot($day, "0");
                }
            }
        }
    }

    public function getFutureRows(): string
    {
        return $this->futureRows;
    }

    public function getPastRows(): string
    {
        return $this->pastRows;
    }

    public function getReservations(): array
    {
        return $this->reservations;
    }





}



?>