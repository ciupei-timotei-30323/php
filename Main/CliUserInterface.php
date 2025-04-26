<?php

namespace Main;

use DateTime;
use mysqli;

require_once "scheduleSetup.php";
require_once "queryGenerator.php";
require_once "tableHtmlGenerator.php";
require_once "daysButtonsGenerator.php";
class CliUserInterface
{


    private scheduleSetup $scheduleSetup;

    private queryGenerator $queryGenerator;

    private tableHtmlGenerator $tableHtmlGenerator;

    private daysButtonsGenerator $daysButtonsGenerator;



    public function __construct(scheduleSetup $scheduleSetup)
    {
        $this->scheduleSetup = $scheduleSetup;

        $this->queryGenerator = new queryGenerator("SELECT date FROM reserved_dates WHERE date BETWEEN '" . $this->scheduleSetup->getCurrentDate()->format('Y-m-d H:i') . "' AND '" . $this->scheduleSetup->getLastDate()->format('Y-m-d H:i') . "';");

        $this->tableHtmlGenerator = new tableHtmlGenerator();

        $this->daysButtonsGenerator = new daysButtonsGenerator();

    }


    public function seeToday(mysqli $db): string
    {
        $finalHtml = "";

        $finalHtml .= $this->daysButtonsGenerator->generate($this->scheduleSetup->getCurrentDate(), $this->scheduleSetup->getMaxDays(), $this->scheduleSetup->getUserDay());

        $arr = $this->queryGenerator->getResult($db);
        foreach ($arr as $result)
        {
            $day = DateTime::createFromFormat("Y-m-d H:i:s", $result["date"]);
            if($day::class == DateTime::class) {
                $this->tableHtmlGenerator->addUnavailableDate($day);
            }
        }


        $finalHtml .= '</div>';
        $finalHtml .= '<form action="../reservePage.php" method="post">';

        $this->tableHtmlGenerator->generate($this->scheduleSetup->getFirstHour(), $this->scheduleSetup->getShiftLength(), $this->scheduleSetup->getTimeIncrement());

        $finalHtml .= $this->tableHtmlGenerator->getDayTableHtml();

        $finalHtml .= <<<'EOD'

            <button class="submit-btn" type="submit">Submit</button>
        </form>
        <a href="../resetTime.php" class="submit-btn">Reset</a>
    </div>
</div>

EOD;

        return $finalHtml;
    }

    public function seeYesterday(): void
    {

    }

    public function reserveDate(): void
    {

    }

}