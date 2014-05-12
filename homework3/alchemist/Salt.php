<?php
include_once('iWeCanEat.php');

/**
 * Class Salt
 */
class Salt extends Element implements iWeCanEat
{
    /**
     * @return bool
     */
    public function eat()
    {
        //NaCl - соль кухонная
        if ($this->view() === 'NaCl') {
            echo('we can eat' . PHP_EOL);
            $res = true;
        } else {
            echo('we can eat, but it is danger' . PHP_EOL);
            $res = false;
        }
        return $res;
    }
}
