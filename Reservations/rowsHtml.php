<?php

namespace Reservations;
use DateTime;
class rowsHtml
{

    private string $pastSlot = <<<'EOD'

                <div class="form-row-disabled">
                    <p>%value%

EOD;


    private string $futureSlot =  <<<'EOD'

<div class="form-row"><label class="radio-label">
<input type="radio" name="slot" value="%value%">

EOD;


    // Mode 0 = future
    // Mode 1 = past

    /**
     * @param DateTime $date
     * @param $mode - Mode 0 = future
     *              - Mode 1 = past
     * @return string
     */
    public function getSlot(DateTime $date, $mode) : string
    {

        switch ($mode) {

            case 1:
                return str_replace('%value%', $date->format("Y-d-m H:i"),$this->pastSlot) . "</p></div>";


            case 0:
                return str_replace('%value%', $date->format("Y-d-m H:i"),$this->futureSlot) . $date->format("H:i") . "</label></div>";

        }

        return '';
    }


}