<?php

/**
 * Class RoofClass
 */
class RoofClass
{
    /**
     * @var string
     */
    private $material;
    /**
     * @var float
     */
    private $price;
    /**
     * @var float
     */
    private $square;
    /**
     * @var string
     */
    private $color;
    /**
     * @var integer
     */
    private $strength;

    /**
     * @param $color
     * @param $material
     * @param $price
     * @param $square
     * @param $strength
     */
    function __construct($color, $material, $price, $square, $strength)
    {
        $this->color = $color;
        $this->material = $material;
        $this->price = $price;
        $this->square = $square;
        $this->strength = $strength;
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
     * @param mixed $strength
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    /**
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @return $this
     */
    public function tornado()
    {
        echo 'tornado' . PHP_EOL;
        return $this;
    }
}