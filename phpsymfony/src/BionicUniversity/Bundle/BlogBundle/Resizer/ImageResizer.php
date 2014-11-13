<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 30.10.14
 * Time: 19:44
 */

namespace BionicUniversity\Bundle\BlogBundle\Resizer;

use Imagine\Image\ImagineInterface;

/**
 * Created by PhpStorm.
 * User: askent
 * Date: 10/30/14
 * Time: 7:38 PM
 */
class ImageResizer implements ResizerInterface
{
    private $height;
    private $width;
    private $filesystem;

    /**
     * @param mixed $filesystem
     */
    public function setFilesystem($filesystem)
    {
        $this->filesystem = $filesystem;
    }

    /**
     * @var ImagineInterface
     */
    private $imageService;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * @param ImagineInterface $imageService
     */
    public function setImageService(ImagineInterface $imageService)
    {
        $this->imageService = $imageService;
    }

    public function resize()
    {
        if (null !== $this->imageService) {
            echo 'Resized';
            die;
        } else {
            echo "imageService is null";
        }
    }
}