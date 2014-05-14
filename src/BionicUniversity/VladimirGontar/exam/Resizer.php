<?php
include_once 'AbstractResizer.php';
include_once 'ImageInterface.php';

/**
 * Class Resizer
 */
class Resizer extends AbstractResizer implements ImageInterface
{

    /**
     * @param $width
     * @param $height
     */
    public function __construct($width, $height)
    {
        $this->height = $this->setHeight($height);
        $this->width = $this->setWidth($width);
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function thumbnail()
    {
        $centerCoordinate = $this->getCenterCoordinates();
        if ($this->getWidth() > $this->getHeight()) {
            $min = $this->getHeight();
        } else {
            $min = $this->getWidth();
        }

        $coordinates = $this->calculateCoordinates($centerCoordinate, $min);
        $res = $this->cropThumbnail($coordinates, $this->thumbnailWidth);
        return $res;

    }

    /**
     * @param $res
     * @param $width
     * @return mixed
     */
    private function cropThumbnail($res, $width)
    {
        //...
        return $res;
    }

    /**
     * @param $centerCoordinate
     * @param $min
     * @return array
     */
    private function calculateCoordinates($centerCoordinate, $min)
    {
        $t1 = array(
            $centerCoordinate[0] - ceil($min / 2),
            $centerCoordinate[1] - ceil($min / 2)
        );
        $t2 = array(
            $centerCoordinate[0] + ceil($min / 2),
            $centerCoordinate[1] + ceil($min / 2)
        );
        return array($t1, $t2);
    }

    /**
     * @return array
     */
    public function getCenterCoordinates()
    {
        return array(ceil($this->width/2), ceil($this->height/2));
    }
} 