<?php
require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle('blue');
$car = new Car ('black',4,'gas');
var_dump($bike);
//var_dump($car);
$color = 'blue';
$currentSpeed = 24;
$currentSpeed1 = 150;
var_dump($bike); // then, another dump.
var_dump($bike);
$bike->dump();
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $currentSpeed. ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');
//$rockrider->setColor('yellow');
// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');
//$tornado->setColor('black');
$tornado->forward();
$bike->dump();
$car->start();
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $currentSpeed1. ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $currentSpeed1. ' km/h' . '<br>';
echo $car->brake();
$ff = new Car ('red',2,'gas');
$toto = new Bicycle ('green');