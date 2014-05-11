<?php
class Alchemist implements iAlchemist
{
    /**
     * @param $elements Array
     *
     * @return bool
     */
    public function dissolve($metal, $acid)
    {
        //2 HCl 2 Na       =        2 NaCl        +        H2
        echo $metal->view . ' + ' . $acid->view . ' = '.
        $isReversible = (time() % 10 == 0);
        return $isReversible;
    }
}
