<?php

namespace Main;

use DateInterval;
use DateTime;

require_once "slotHtml.php";
class tableHtmlGenerator
{

    private slotHtml $slotHtml;

    private array $unavailableDates = array();


    private string $dayTableHtml = "";

    public function __construct()
    {
        $this->slotHtml = new slotHtml();

    }


    public function addUnavailableDate(DateTime $day)
    {
        $this->unavailableDates[$day->format("Y-d-m H:i")] = $day->format("d H:i");
    }

    public function getDayTableHtml(): string
    {
        return $this->dayTableHtml;
    }

    public function eraseHtml():void
    {
        $this->dayTableHtml = "";
    }


    public function generate(DateTime $firstHour, DateInterval $shiftLength, DateInterval $increment)
    {
        $today = clone $firstHour;
        while($firstHour <= (clone $today)->add($shiftLength))
        {
            if(key_exists($firstHour->format("Y-d-m H:i") ,$this->unavailableDates))
            {
                // slot is reserved
                $this->dayTableHtml .= $this->slotHtml->getSlot($firstHour, 1);
            }
            else
            {
                // slot is free
                $this->dayTableHtml .= $this->slotHtml->getSlot($firstHour, 0);
            }

            $firstHour->add($increment);
        }
    }

}