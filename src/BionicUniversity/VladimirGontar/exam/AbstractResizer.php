<?php

/**
 * Class AbstractResizer
 */
abstract class AbstractResizer
{
    /**
     * @var integer
     */
    public $thumbnailWidth = 140;
    /**
     * @var integer
     */
    public $width;

    /**
     * @var integer
     */
    public $height;

    /**
     * @return mixed
     */
    abstract public function thumbnail();

    /**
     * @param $width
     * @param $height
     * @return mixed
     */
    abstract public function getCenterCoordinates();
} 