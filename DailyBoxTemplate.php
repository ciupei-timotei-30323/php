<?php

class DailyBoxTemplate
{

    private $finalHtml = "";

    private $isDisabled = false;

    private $date;

    /**
     * @param bool $isDisabled
     * @param $date
     */
    public function __construct(bool $isDisabled, $date)
    {
        $this->isDisabled = $isDisabled;
        $this->date = $date;
        $this->generateHtml();
    }

    private function generateHtml() : string{

        $this->finalHtml = '<div class="form-row';
        if(!$this->isDisabled) {
            $this->finalHtml .= '-disabled"><label class="radio-label"><input disabled type="radio" name="slot" ';
        }
        else
        {
            $this->finalHtml .= '"><label class="radio-label"><input type="radio" name="slot" ';
        }

        $this->finalHtml .= 'value="'.$this->date->format('Y-d-m H:i').'"> '.$this->date->format('H:i').'</label></div>';
        return $this->finalHtml;

    }

    public function getFinalHtml(): string
    {
        return $this->finalHtml;
    }




}