<?php

/**
 * Class AbstractElement
 */
abstract class AbstractElement
{
    /**
     * @param $atomName
     * @param $count
     * @return $this
     */
    abstract public function add($atomName, $count);

    /**
     * @return string
     */
    abstract public function view();
}