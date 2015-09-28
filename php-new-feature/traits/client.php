<?php

// load all files
require 'CanRun.php';
require 'Car.php';
require 'Ferrari.php';
require 'Scania.php';

// use keyword to avoid declare FQCN
use Workshop\Ferrari;
use Workshop\Scania;

// create objects
$ferrari = new Ferrari();
$ferrari->run(200);

$scania = new Scania();
$scania->run(30);

echo "Ferrari can run up to {$ferrari->getSpeed()} km/h" .  PHP_EOL;
echo "Scania can run up to {$scania->getSpeed()} km/h" .  PHP_EOL;
