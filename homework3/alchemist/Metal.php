<?php

/**
 * Class Metal
 */
class Metal extends Element
{
    /**
     * @var bool
     */
    public $beforeH;

    /**
     * @param $atomName
     */
    function __construct($atomName)
    {
        $metalRow = array(
            'Li', 'Rb', 'K', 'Ba', 'Sr', 'Ca', 'Na', 'Mg', 'Al', 'Mn', 'Zn', 'Cr', 'Fe', 'Cd', 'Co', 'Ni', 'Sn', 'Pb', 'H', 'Sb', 'Bi', 'Cu', 'Hg', 'Ag', 'Pd', 'Pt', 'Au'
        );
        $this->add($atomName);
        if (array_search($atomName, $metalRow) < 18) {
            $this->beforeH = true;
        } else {
            $this->beforeH = false;
        }

    }


}
