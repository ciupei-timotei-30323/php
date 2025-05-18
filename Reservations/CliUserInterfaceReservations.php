<?php

namespace Reservations;

use Main\queryGenerator;
use mysqli;

require_once "../Main/queryGenerator.php";
require_once "UserSetup.php";
require_once "rowsGenerator.php";
class CliUserInterfaceReservations
{


    private rowsGenerator $rowsGenerator;
    private UserSetup $userSetup;

    private queryGenerator $queryGenerator;

    // Used to generate the html between the future and past time slots
    private string $betweenHtml;

    public function __construct(UserSetup $userSetup, mysqli $db)
    {
        $this->userSetup = $userSetup;
        $this->queryGenerator = new queryGenerator("SELECT date FROM reserved_dates WHERE idUser = '{$this->userSetup->getUserId()}'");

        $reservations = $this->queryGenerator->getResult($db);
        $this->rowsGenerator = new rowsGenerator($reservations);

        $this->betweenHtml = <<<'EOD'
                <button class="submit-btn" type="submit">Cancel reservation</button>
            </form>
            <div style="gap: 0.5rem;
            display: flex;
            flex-direction: column;
            font-weight : bold;">
                <div class="header-row" style="margin-top: 2rem;">
                    <div class="header-title">Past/Canceled reservations</div>
                </div>
EOD;

    }

    public function seeReservations() : string
    {
        $finalHtml = "";

        $this->rowsGenerator->generate($this->userSetup->getToday());

        $finalHtml .= $this->rowsGenerator->getFutureRows() . $this->betweenHtml . $this->rowsGenerator->getPastRows();

        return $finalHtml;

    }



}