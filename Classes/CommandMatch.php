<?php

namespace Classes;
require_once ('Classes/Match.php');

class CommandMatch extends Match
{
    /**
     * CommandMatch constructor.
     */
    public function __construct()
    {
        $this->command_a = rand(0, 10);
        $this->command_b = rand(0, 10);
        $this->sum = $this->getSumGoal();
        $this->type = $this->getResultMatch();
    }
}