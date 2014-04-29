<?php
$arrayObject = new ArrayObject($array); // вспомагательный класс PHP
$arrayObject->offsetGet(2);

if (1 == '1'){//true
}
if (1 == true){//true
}
array_key_exists('key', $array); // существует ли ключ
range(0,10); // возвращает массив с 0 до 10

func_get_args();// для поддержки неограниченого количества аргументов в функции. Используется в теле функции.  