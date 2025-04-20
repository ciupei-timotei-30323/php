<?php
require "DailyBoxTemplate.php";
require "ReservationChecker.php";



class generateDailyTable
{
    private  $dailyBoxTemplate;

    private $finalHtml = "";

    private $checker;

    // adds to the final html a whole list set in the specified
    // hours interval
    public function addHoursInterval(DateTime $firstHour, DateTime $lastHour)
    {
        $this->checker = new ReservationChecker($firstHour);

        while($this->checker->getCheckedDate()->format("H") <= $lastHour->format('H')) {

            $this->addTableBox($this->checker->isDateFree(), $this->checker->getCheckedDate());
            $this->checker->addOneHour();
        }

    }

    // Adds a box to the daily table
    public function addTableBox($isDisabled ,$date)
    {
        $this->dailyBoxTemplate = new DailyBoxTemplate($isDisabled, $date);
        $this->finalHtml .= $this->dailyBoxTemplate->getFinalHtml();
    }



    public function getFinalHtml(): string
    {
        return $this->finalHtml;
    }



}