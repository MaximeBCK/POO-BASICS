<?php
require_once 'Bicycle.php';

$bike = new Bicycle('red');

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


$rockrider = new Bicycle('yellow');


$tornado = new Bicycle('dark');


$tornado->forward();

require_once 'Car.php';
$car = new Car('blue',5,'diesel');

echo $car->start();
echo $car->getCurrentSpeed(). 'km/h' . '<br>';

