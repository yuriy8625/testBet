<?php

namespace Controller;
include_once ('Classes/CommandMatch.php');
include_once ('Classes/UserMatch.php');
include_once ('Classes/Prise.php');
include_once ('Controller/Controller.php');
use Classes\CommandMatch;
use Classes\Prise;
use Classes\UserMatch;

class PriceController
{
    /**
     * @return array
     */
    public function getEventResult()
    {
        if(!$this->valiidate()){
            return [
                'type' => 'error',
                'message' => 'Ошибка данных',
            ];
        }

        $command_match = new CommandMatch();
        $user_match = new UserMatch((int) $_POST['command_a'], (int) $_POST['command_b']);

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
        if($a === NULL || $b === NULL){
            return false;
        }

        return true;
    }


}