<?php

require_once 'Vehicle.php';
require_once 'Car.php';

$myCar = new Car('bmw', '335', 2009, 4);
echo "\n";
print_r($myCar);