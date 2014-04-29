<?php

abstract class AbstractHouseClass
{
    public $door;
    public $window;
    public $floor;
    public $roof;
    public $rooms;

    function __construct($door, $floor, $roof, $rooms, $window)
    {
        $this->door = $door;
        $this->floor = $floor;
        $this->roof = $roof;
        $this->rooms = $rooms;
        $this->window = $window;
    }


}