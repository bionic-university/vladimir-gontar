<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 30.10.14
 * Time: 21:14
 */

namespace BionicUniversity\Bundle\BlogBundle\TextServices;


use Symfony\Component\Translation\Tests\String;

class Transliterator implements TransliteratorInterface {

    /**
     * @var String
     */
    private $mode;

    function __construct($mode)
    {
        $this->mode = $mode;
    }

    public function translit($str){
        echo('transliterated with mode ' . $this->mode);
    }
} 