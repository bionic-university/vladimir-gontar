<?php
include_once('Acid.php');
include_once('Gas.php');
include_once('Metal.php');
include_once('Salt.php');
include_once('Element.php');
include_once('iAlchemist.php');

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
        $gas = new Gas();
        $gas->add('H', 2);
        $salt = new Salt();
        $salt->add($metal->elements[0]['atomName']);
        $oxide = $acid->elements;
        array_shift($oxide);
        $salt->elements = array_merge($salt->elements, $oxide);
        echo $acid->view() . ' + ' . $metal->view() . ' = ' . $salt->view() . ' + ' . $gas->view() . PHP_EOL;
        $isReversible = (time() % 10 == 0);
        if ($isReversible) {
            echo 'Process is reversible.' . PHP_EOL;
        }
        return $res;
    }
}
