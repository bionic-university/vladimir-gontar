<?php

/**
 * Class FloorClass
 */
class FloorClass
{
    /**
     * @var float
     */
    public $square;
    /**
     * @var string
     */
    private $material;
    /**
     * @var string
     */
    private $type;
    /**
     * @var float
     */
    private $price;
    /**
     * @var bool
     */
    private $warm;

    /**
     * @param $material
     * @param $price
     * @param $square
     * @param $type
     * @param $warm
     */
    function __construct($material, $price, $square, $type, $warm)
    {
        $this->material = $material;
        $this->price = $price;
        $this->square = $square;
        $this->type = $type;
        $this->warm = $warm;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
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
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $warm
     */
    public function setWarm($warm)
    {
        $this->warm = $warm;
    }

    /**
     * @return mixed
     */
    public function getWarm()
    {
        return $this->warm;
    }

    /**
     * @return bool
     */
    public function renew()
    {
        echo 'renew' . PHP_EOL;
        return true;
    }
}