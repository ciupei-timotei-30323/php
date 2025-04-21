<?php

class generateTimeButtons
{
    private string $finalHtmlTmmrw;


    private string $finalHtmlYestrdy;

    public function __construct($isTmmrwBlocked, $isYestrdyBlocked)
    {
        if($isTmmrwBlocked)
        {
            $this->finalHtmlTmmrw = '<a href="#" class="nav-button-disabled">&rarr;</a>';
            $this->finalHtmlYestrdy = '<a href="getYestrdy.php" class="nav-button">&larr;</a>';
        }
        elseif ($isYestrdyBlocked)
        {
            $this->finalHtmlYestrdy = '<a href="#" class="nav-button-disabled">&larr;</a>';
            $this->finalHtmlTmmrw = '<a href="getTmmrw.php" class="nav-button">&rarr;</a>';
        }
        else
        {
            $this->finalHtmlTmmrw = '<a href="getTmmrw.php" class="nav-button">&rarr;</a>';
            $this->finalHtmlYestrdy = '<a href="getYestrdy.php" class="nav-button">&larr;</a>';
        }
    }

    public function getFinalHtmlTmmrw(): string
    {
        return $this->finalHtmlTmmrw;
    }

    public function getFinalHtmlYestrdy(): string
    {
        return $this->finalHtmlYestrdy;
    }



}


