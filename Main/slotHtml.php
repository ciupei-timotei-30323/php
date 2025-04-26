<?php

namespace Main;
use DateTime;
class slotHtml
{

    private string $reservedSlot = <<<'EOD'

<div class="form-row-disabled"><label class="radio-label">
<input disabled type="radio" name="slot" value="%value%"> 

EOD;


    private string $freeSlot =  <<<'EOD'

<div class="form-row"><label class="radio-label">
<input type="radio" name="slot" value="%value%">

EOD;


    // Mode 0 = reserved
    // Mode 1 = free

    /**
     * @param DateTime $date
     * @param $mode - Mode 0 = reserved
     *              - Mode 1 = free
     * @return string
     */
    public function getSlot(DateTime $date, $mode) : string
    {

        switch ($mode) {

            case 1:
                return str_replace('%value%', $date->format("Y-d-m H:i"),$this->reservedSlot) . $date->format("H:i") . "</label></div>";


            case 0:
                return str_replace('%value%', $date->format("Y-d-m H:i"),$this->freeSlot) . $date->format("H:i") . "</label></div>";

        }

        return '';
    }


}