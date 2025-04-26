<?php

namespace Main;

use DateInterval;
use DateTime;

class scheduleSetup
{
    // used to get the day of the reservation
    private DateTime $currentDate;

    private DateInterval $maxDays;

    private DateTime $userDay;

    // Used to get the hour of the reservation
    private DateTime $firstHour;

    private DateInterval $shiftLength;

    private DateInterval $timeIncrement;



    // Getters and setters

    /**
     * @param DateTime $currentDate
     * @param DateInterval $maxDays
     * @param DateTime $userDay
     * @param DateTime $firstHour
     * @param DateInterval $shiftLength
     * @param DateInterval $timeIncrement
     */
    public function __construct(DateTime $currentDate, DateInterval $maxDays, DateTime $userDay, DateTime $firstHour, DateInterval $shiftLength, DateInterval $timeIncrement)
    {
        $this->currentDate = $currentDate;
        $this->maxDays = $maxDays;
        $this->userDay = $userDay;
        $this->firstHour = $firstHour;
        $this->shiftLength = $shiftLength;
        $this->timeIncrement = $timeIncrement;
    }


    public function getCurrentDate(): DateTime
    {
        return $this->currentDate;
    }

    public function setCurrentDate(DateTime $currentDate): void
    {
        $this->currentDate = $currentDate;
    }

    public function getMaxDays(): DateInterval
    {
        return $this->maxDays;
    }

    public function setMaxDays(DateInterval $maxDays): void
    {
        $this->maxDays = $maxDays;
    }

    public function getUserDay(): DateTime
    {
        return $this->userDay;
    }

    public function setUserDay(DateTime $userDay): void
    {
        $this->userDay = $userDay;
    }

    public function getFirstHour(): DateTime
    {
        return $this->firstHour;
    }

    public function setFirstHour(DateTime $firstHour): void
    {
        $this->firstHour = $firstHour;
    }

    public function getShiftLength(): DateInterval
    {
        return $this->shiftLength;
    }

    public function setShiftLength(DateInterval $shiftLength): void
    {
        $this->shiftLength = $shiftLength;
    }

    public function getTimeIncrement(): DateInterval
    {
        return $this->timeIncrement;
    }

    public function setTimeIncrement(DateInterval $timeIncrement): void
    {
        $this->timeIncrement = $timeIncrement;
    }


    // Methods

    public function getLastDate(): DateTime
    {
        return (clone $this->currentDate)->add($this->maxDays);
    }






}