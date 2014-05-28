<?php
namespace BionicUniversity\VladimirGontar\Alchemist;

include_once('iWeCanEat.php');

/**
 * Class Acid
 */
class Acid extends Element implements iWeCanEat
{

    /**
     * @return bool
     */
    public function eat()
    {
        //CH3COOH - уксус
        if ($this->view() === 'CH3COOH') {
            echo('we can eat' . PHP_EOL);
            $res = true;
        } else {
            echo('we can eat, but it is danger' . PHP_EOL);
            $res = false;
        }
        return $res;
    }

}

