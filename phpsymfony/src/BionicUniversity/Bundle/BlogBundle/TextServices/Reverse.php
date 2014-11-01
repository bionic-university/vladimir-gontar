<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 01.11.14
 * Time: 13:16
 */

namespace BionicUniversity\Bundle\BlogBundle\TextServices;


class Reverse implements ReverseInterface
{
    public function reverse($str)
    {
        return strrev($str);
    }
} 