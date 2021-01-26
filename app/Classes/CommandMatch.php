<?php

namespace App\Classes;

class CommandMatch extends BaseMatch
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