<?php
include_once('AbstractElement.php');
include_once('Element.php');
include_once('Acid.php');
include_once('Gas.php');
include_once('Metal.php');
include_once('Salt.php');

include_once('iAlchemist.php');

/**
 * Class Alchemist
 */
class Alchemist implements iAlchemist
{
    /**
     * @param $elements Array
     *
     * @return bool
     */
    public function dissolve($acid, $metal)
    {
        $res = true;
        if (false === $metal->beforeH){
            $res = false;
        } else {
            $gas = new Gas();
            $gas->add('H', 2);
            $salt = new Salt();
            $salt->add($metal->elements[0]['atomName']);
            $rest = $acid->elements;
            array_shift($rest);
            $salt->elements = array_merge($salt->elements, $rest);
            echo $acid->view() . ' + ' . $metal->view() . ' = ' . $salt->view() . ' + ' . $gas->view() . PHP_EOL;
            $isReversible = (time() % 10 == 0);
            if ($isReversible) {
                echo 'Process is reversible.' . PHP_EOL;
            }
        }
        return $res;
    }
}
