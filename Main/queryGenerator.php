<?php

namespace Main;

use mysqli;

class queryGenerator
{

    private string $query;

    // constructor



    // setter
    public function __construct(string $query)
    {
        $this->query = $query;
    }

    public function setQuery(string $query): void
    {
        $this->query = $query;
    }



    // methods

    public function getResult(mysqli $db): array
    {
        $result = $db->query($this->query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }



}