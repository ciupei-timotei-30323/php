<?php

namespace Reservations;

use DateTime;

class UserSetup
{

    private int  $userId;

    private DateTime $today;


    public function __construct(int $userId)
    {
        $this->userId = $userId;
        $this->today = new DateTime("now");
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getToday(): DateTime
    {
        return $this->today;
    }



}