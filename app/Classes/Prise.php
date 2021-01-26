<?php


namespace App\Classes;


class Prise
{
    const MAX = 2;
    const MEDIUM = 1;
    const LOSE = 0;

    public $prices = [
        self::MAX => 'большой приз',
        self::MEDIUM => 'маленький приз',
        self::LOSE => 'нулевой приз',
    ];

    private $userMatch;
    private $commandMatch;
    public $type;
    public $message;

    /**
     * Prise constructor.
     * @param  CommandMatch  $commandMatch
     * @param  UserMatch  $userMatch
     */
    public function __construct(CommandMatch $commandMatch, UserMatch $userMatch)
    {
        $this->userMatch = $userMatch;
        $this->commandMatch = $commandMatch;

        $this->setInfo();
    }

    /**
     * @return string|null
     */
    public function getPrise()
    {
        return $this->message;
    }

    protected function setInfo()
    {
        $sum = $this->userMatch->sum === $this->commandMatch->sum;
        $result = $this->commandMatch->type === $this->userMatch->type;
        if ($result && $sum) {
            $this->type = self::MAX;
        }

        if ($result && !$sum) {
            $this->type = self::MEDIUM;
        }

        if (!$result) {
            $this->type = self::LOSE;
        }

        $this->message = 'Вы выиграли - '.$this->prices[$this->type];
    }


}