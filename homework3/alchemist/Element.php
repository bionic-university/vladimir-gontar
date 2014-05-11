<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 11.05.14
 * Time: 16:24
 */

class Element {
    public $number;
    public $name;

    function __construct($name, $number=1)
    {
        $this->name = $name;
        $this->number = $number;
    }
}