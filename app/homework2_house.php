<?php
include __DIR__ . '/../src/BionicUniversity/VladimirGontar/House/DoorClass.php';
include __DIR__ . '/../src/BionicUniversity/VladimirGontar/House/WindowClass.php';
include __DIR__ . '/../src/BionicUniversity/VladimirGontar/House/FloorClass.php';
include __DIR__ . '/../src/BionicUniversity/VladimirGontar/House/RoofClass.php';
include __DIR__ . '/../src/BionicUniversity/VladimirGontar/House/RoomClass.php';
include __DIR__ . '/../src/BionicUniversity/VladimirGontar/House/HouseClass.php';

$door1 = new DoorClass('green', 2, 'metal', 300.3, 20.3, 2);
$door2 = new DoorClass('black', 2, 'metal', 300.3, 20.3, 2);
$door1->installation();

$window1 = new WindowClass('metal', 2.1, 'organic', 100, 3.1);
$window2 = new WindowClass('metal', 1, 'organic', 100, 2);
$window2->breakTheWindow();

$floor = new FloorClass('wood', 2000, 55, 'parquetry', true);
$floor->renew();

$roof = new RoofClass('red', 'metal', 1000, 56.8, 10);
$roof->tornado();

$room1 = new RoomClass('blu', true, 2.3, 1, 20.5);
$room2 = new RoomClass('red', true, 2.3, 1, 12);
$room1->color();

$house = new HouseClass(array($door1, $door2), $floor, $roof, array($room1, $room2), array($window1, $window2));
$house->calculatePrice();

var_dump($house);