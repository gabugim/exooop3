<?php
require_once 'bicycle.php';
require_once 'car.php';
require_once 'truck.php';
require_once "MotorWay.php";
require_once "PedestrianWay.php";
require_once "ResidentialWay.php";

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
$truck = new Truck('bleu', 1, "fuel", 0);
echo $truck->forward();
var_dump($truck);
echo $truck->setFilling();
$a10 = new MotorWay([$truck]);
$a10->addVehicule($car);
var_dump($a10);
$a10->addVehicule($bicycle);
var_dump($a10);
