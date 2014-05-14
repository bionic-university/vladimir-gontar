<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 14.05.14
 * Time: 20:50
 */
include_once(__DIR__ . '/../src/BionicUniversity/VladimirGontar/exam/Resizer.php');

$img = new Resizer($width, $height);

$thumb = $img->thumbnail();
