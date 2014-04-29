<?php

/**
 * Class RoomClass
 */
class RoomClass
{
    /**
     * @var float
     */
    private $square;
    /**
     * @var string
     */
    private $color;
    /**
     * @var float
     */
    private $height;
    /**
     * @var integer
     */
    private $numberOfWindows;
    /**
     * @var bool
     */
    private $heating;

    /**
     * @param $color
     * @param $heating
     * @param $height
     * @param $numberOfWindows
     * @param $square
     */
    function __construct($color, $heating, $height, $numberOfWindows, $square)
    {
        $this->color = $color;
        $this->heating = $heating;
        $this->height = $height;
        $this->numberOfWindows = $numberOfWindows;
        $this->square = $square;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $heating
     */
    public function setHeating($heating)
    {
        $this->heating = $heating;
    }

    /**
     * @return mixed
     */
    public function getHeating()
    {
        return $this->heating;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $numberOfWindows
     */
    public function setNumberOfWindows($numberOfWindows)
    {
        $this->numberOfWindows = $numberOfWindows;
    }

    /**
     * @return mixed
     */
    public function getNumberOfWindows()
    {
        return $this->numberOfWindows;
    }

    /**
     * @param mixed $square
     */
    public function setSquare($square)
    {
        $this->square = $square;
    }

    /**
     * @return mixed
     */
    public function getSquare()
    {
        return $this->square;
    }

    /**
     * @return $this
     */
    public function color()
    {
        echo 'color room' . PHP_EOL;
        return $this;
    }

} 