<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 01.11.14
 * Time: 13:42
 */

namespace BionicUniversity\Bundle\BlogBundle\TextServices;


class Aliaser implements AliaserInterface
{

    private $wordSeparator;

    private $transliterator;

    function __construct($wordSeparator)
    {
        $this->wordSeparator = $wordSeparator;
    }

    /**
     * @param Transliterator $transliterator
     */
    public function setTransliterator($transliterator)
    {
        $this->transliterator = $transliterator;
    }


    public function makeAlias($str)
    {
        $this->transliterator->translit($str);
        echo 'magic_alias_ready';
        die;

        return 'magic_alias_ready';
    }
} 