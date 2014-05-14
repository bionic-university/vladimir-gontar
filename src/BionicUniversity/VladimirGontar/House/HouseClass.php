<?php
include 'AbstractHouseClass.php';

/**
 * Class HouseClass
 */
class HouseClass extends AbstractHouseClass
{


    /**
     * @param $door
     * @param $floor
     * @param $roof
     * @param $rooms
     * @param $window
     */
    function __construct($door, $floor, $roof, $rooms, $window)
    {
        parent::__construct($door, $floor, $roof, $rooms, $window);
    }

    /**
     * @return bool
     */
    public function calculatePrice()
    {
        echo 'price is XXX' . PHP_EOL;
        return true;
    }
}