<?php

namespace Main;

class daysButtonsHtml
{

    private string $disabledButtonHtml = '<a href="#" class="nav-button-disabled">&rarr;</a>';

    private string $activeButtonHtml = '<a href="?" class="nav-button">&rarr;</a>';


    public function getDaysButtons(bool $isActive)
    {
        return $isActive ? $this->activeButtonHtml : $this->disabledButtonHtml;
    }

}