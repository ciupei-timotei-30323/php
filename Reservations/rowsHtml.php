<?php

namespace Reservations;
use DateTime;
class rowsHtml
{

    private string $pastSlotTemplate = <<<'EOD'

                <div class="form-row-disabled">
                    <p>%value%

EOD;

    private string $pastSlot = "";


    private string $futureSlotTemplate =  <<<'EOD'

<div class="form-row"><label class="radio-label">
<input type="radio" name="slot" value="%value%">

EOD;

    private string $futureSlot = "";




    // Mode 0 = future
    // Mode 1 = past
    public function __construct()
    {
        $this->futureSlot .= <<<'EOD'

                <div class="form-row-disabled">
                    <p>There's no date reserved</p></div>

EOD;

        $this->pastSlot .= <<<'EOD'

                <div class="form-row-disabled">
                    <p>There's no date reserved</p></div>

EOD;
    }


    public function getEmptySlot(): string
    {
        return <<<'EOD'

                <div class="form-row-disabled">
                    <p>There's no date reserved</p></div>

EOD;
    }

    /**
     * @param DateTime $date
     * @param $mode - Mode 0 = future
     *              - Mode 1 = past
     * @return string
     */
    public function getSlot(DateTime $date, $mode) : string
    {
//        if(!isset($date))
//        {
//            return <<<'EOD'
//
//                <div class="form-row-disabled">
//                    <p>There's no date reserved</p></div>
//
//EOD;
//
//        }

        switch ($mode) {

            case "1":

                return str_replace('%value%', $date->format("Y-d-m H:i"),$this->pastSlotTemplate) . "</p></div>";


            case "0":


                return str_replace('%value%', $date->format("Y-d-m H:i"),$this->futureSlotTemplate) . $date->format(" d-m H:i") . "</label></div>";

        }
        return "";

    }



}