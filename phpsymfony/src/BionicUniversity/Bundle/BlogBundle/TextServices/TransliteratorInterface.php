<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 30.10.14
 * Time: 21:11
 */

namespace BionicUniversity\Bundle\BlogBundle\TextServices;


interface TransliteratorInterface
{
    public function translit($str);
} 