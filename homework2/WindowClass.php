<?php

/**
 * Class WindowClass
 */
class WindowClass
{
    /**
     * @var string
     */
    private $material;
    /**
     * @var float
     */
    private $width;
    /**
     * @var float
     */
    private $height;
    /**
     * @var float
     */
    private $price;
    /**
     * @var float
     */
    private $frame;

    /**
     * @param $frame
     * @param $height
     * @param $material
     * @param $price
     * @param $width
     */
    function __construct($frame, $height, $material, $price, $width)
    {
        $this->frame = $frame;
        $this->height = $height;
        $this->material = $material;
        $this->price = $price;
        $this->width = $width;
    }

    /**
     * @param mixed $frame
     */
    public function setFrame($frame)
    {
        $this->frame = $frame;
    }

    /**
     * @return mixed
     */
    public function getFrame()
    {
        return $this->frame;
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
    public function breakTheWindow()
    {
        echo 'broken window' . PHP_EOL;
        return true;
    }
}