<?php

/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 11.05.14
 * Time: 16:24
 */
class Element extends AbstractElement
{
    /**
     * @var array
     */
    public $elements = array();
    /**
     * @var string
     */
    public $name;

    /**
     * @param $atomName
     * @param int $count
     * @return $this
     */
    public function add($atomName, $count = 1)
    {
        //TODO check if exist $atomName
        array_push($this->elements, array('atomName' => $atomName, 'count' => $count));
        return $this;
    }

    /**
     * @return string
     */
    public function view()
    {
        $res = '';
        foreach ($this->elements as $element) {
            $res .= $element['atomName'];
            if ($element['count'] > 1) {
                $res .= $element['count'];
            }
        }
        return $res;
    }
}