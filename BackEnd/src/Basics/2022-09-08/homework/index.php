<?php

require_once 'Vehicle.php';
require_once 'Boat.php';
require_once 'Bus.php';
require_once 'Car.php';
require_once 'Motorcycle.php';
require_once 'Plane.php';
require_once 'Cars/Bmw.php';

try {
$boat = new Boat('Boat', 'katamaran', 2019);
$bus = new Bus('Ikarus', 'SchoolBus', 2006, 6);
$car = new Car('Opel', 'Astra', 1998, 4);
$moto = new Motorcycle('Yamaha', 'cross', 2021, 2);
$plane = new Plane('Boeing', '737', 2020, 6);
// $bmw = new Bmw('335', 2015);

print_r($boat);
print_r($bus);
print_r($car);
print_r($moto);
print_r($plane);

}catch(Exception $e){
    var_dump($e->getMessage());
}