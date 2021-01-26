<?php

namespace App\Controller;

use App\Classes\CommandMatch;
use App\Classes\Prise;
use App\Classes\UserMatch;

class PriceController
{
    /**
     * @return array
     */
    public function getEventResult()
    {
        if (!$this->valiidate()) {
            return [
                'type' => 'error',
                'message' => 'Ошибка данных',
            ];
        }

        $command_match = new CommandMatch();
        $user_match = new UserMatch((int)$_POST['command_a'], (int)$_POST['command_b']);

        $prise = new Prise($command_match, $user_match);

        return [
            'type' => 'success',
            'user_info' => $user_match->getInfo(),
            'command_info' => $command_match->getInfo(),
            'prise' => $prise->getPrise()
        ];
    }

    public function valiidate()
    {
        $a = $_POST['command_a'];
        $b = $_POST['command_b'];
        if ($a === null || $b === null) {
            return false;
        }

        return true;
    }


}