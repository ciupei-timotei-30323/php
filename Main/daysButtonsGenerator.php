<?php

namespace Main;

use DateInterval;
use DateTime;

require_once "daysButtonsHtml.php";
class daysButtonsGenerator
{

    private daysButtonsHtml $daysButtonsHtml;

    private string $ButtonsHtml = "";

    public function __construct()
    {
        $this->daysButtonsHtml = new daysButtonsHtml();
    }

    public function getButtonsHtml(): string
    {
        return $this->ButtonsHtml;
    }


    public function generate(DateTime $currentTime, DateInterval $maxDays, DateTime $userDay): string
    {
        // the user is on the current time
        // not allowed to pass more backward
        if ($userDay->setTime(0,0,0) <= $currentTime->setTime(0,0,0))
        {
            $this->ButtonsHtml .= <<<'EOD'
<a href="#" class="nav-button-disabled">&larr;</a>
EOD;

            $this->ButtonsHtml .= '<div class="header-title">Reserve on ' . $userDay->format('m-d') . '</div>';

            $this->ButtonsHtml .= '<a href="getTmrw.php" class="nav-button">&rarr;</a>';
        }


        // the user didn't pass the allowed time
        elseif($userDay <= $currentTime->add($maxDays)) {
            $tmrw = $this->daysButtonsHtml->getDaysButtons(true);

            $this->ButtonsHtml .= '<a href="getYestrday.php" class="nav-button">&larr;</a>';

            $this->ButtonsHtml .= '<div class="header-title">Reserve on ' . $userDay->format('m-d') . '</div>';

            $this->ButtonsHtml .= str_replace('?', 'getTmrw.php', $tmrw);

        }


        else
        {
            $this->ButtonsHtml .= <<<'EOD'
<a href="getYestrday.php" class="nav-button">&larr;</a>
EOD;

            $this->ButtonsHtml .= '<div class="header-title">Reserve on ' . $userDay->format('m-d') . '</div>';

            $this->ButtonsHtml .= '<a href="#" class="nav-button-disabled">&rarr;</a>';
        }

        return $this->ButtonsHtml;
    }





}