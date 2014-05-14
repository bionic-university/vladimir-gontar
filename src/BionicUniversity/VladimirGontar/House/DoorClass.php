<?php

/**
 * Class DoorClass
 */
class DoorClass
{
    /**
     * @var float
     */
    private $height;
    /**
     * @var float
     */
    private $width;
    /**
     * @var string
     */
    private $material;
    /**
     * @var float
     */
    private $weight;
    /**
     * @var string
     */
    private $color;
    /**
     * @var float
     */
    private $price;

    /**
     * @param $color
     * @param $height
     * @param $material
     * @param $price
     * @param $weight
     * @param $width
     */
    function __construct($color, $height, $material, $price, $weight, $width)
    {
        $this->color = $color;
        $this->height = $height;
        $this->material = $material;
        $this->price = $price;
        $this->weight = $weight;
        $this->width = $width;
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
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return bool
     */
    public function  installation()
    {
        echo "door installation" . PHP_EOL;
        return true;
    }
}