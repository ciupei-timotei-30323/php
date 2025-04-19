<?php
require "DailyBoxTemplate.php";
class generateDailyTable
{
    private $dailyBoxTemplateArray = array();

    private $finalHtml = "";



    public function addTableBox($isDisabled ,$date)
    {
        $this->dailyBoxTemplateArray[] = new DailyBoxTemplate($isDisabled, $date);
    }

    public function generateTodayTable()
    {
        foreach($this->dailyBoxTemplateArray as $dailyBox)
        {
            $this->finalHtml .= $dailyBox->getFinalHtml();
        }
    }

    public function getFinalHtml(): string
    {
        return $this->finalHtml;
    }



}