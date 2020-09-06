<?php

namespace Classes;
require_once ('Classes/Match.php');

class UserMatch extends Match
{
    /**
     * UserMatch constructor.
     * @param int $command_a
     * @param int $command_b
     */
    public function __construct(int $command_a, int $command_b)
    {
        $this->command_a = $command_a;
        $this->command_b = $command_b;
        $this->sum = $this->getSumGoal();
        $this->type = $this->getResultMatch();
    }

}