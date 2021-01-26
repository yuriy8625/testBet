<?php

namespace App\Classes;

class BaseMatch
{
    const WINS_A = 1;
    const WINS_B = 2;
    const DRAW = 3;

    public $command_a;
    public $command_b;
    public $sum;
    public $type;


    /**
     * @return int
     */
    public function getSumGoal()
    {
        return $this->command_a + $this->command_b;
    }

    /**
     * @return bool|int
     */
    public function getResultMatch()
    {
        if ($this->command_a === $this->command_b) {
            return self::DRAW;
        }

        if ($this->command_a > $this->command_b) {
            return self::WINS_A;
        }

        if ($this->command_b > $this->command_a) {
            return self::WINS_B;
        }

        return false;
    }

    public function getInfo()
    {
        return [
            'command_a' => $this->command_a,
            'command_b' => $this->command_b,
            'sum' => $this->sum,
            'type' => $this->type,
        ];
    }
}