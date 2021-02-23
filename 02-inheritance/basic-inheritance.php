<?php

require_once('includes/helpers.php');

require_once('includes/Vehicle.php');
require_once('includes/Bicycle.php');
require_once('includes/Boat.php');
require_once('includes/Car.php');

$myGenericVehicle = new Vehicle("Gen", "Eric");

$myCar = new Car("Tesla", "Roadster 2020", 4);
$myCar->model = "Roadster 2020";
$myCar->wheels = 4;

$myBoat = new Boat("Bayliner", "VR5 Cuddy");
$mySecondBoat = new Boat("Formula", "430");
$titanic = new Boat("M/S", "Titanic");
$titanic->floats = false;

$myBike = new Bicycle("Yosemite", "City Bike");

$vehicles = [
	$myGenericVehicle, // 0
	$myCar, // 1
	$myBoat, // 2
	$mySecondBoat, // 3
	$titanic, // 4
	$myBike // 5
];

dump($vehicles);

foreach ($vehicles as $index => $vehicle) {
	echo ++$index . ": " . $vehicle->getInfo() . "<br>";
	/*
	echo "<h1>{$vehicle->type}: {$vehicle->manufacturer} {$vehicle->model}</h1>";

	if ($vehicle->hasEngine()) {
		echo "We're powered!<br>";
	} else {
		echo "No engine here, just human energy.<br>";
	}

	if ($vehicle->hasWheels()) {
		echo "We got's {$vehicle->wheels} wheels!<br>";
	} else {
		echo "No wheels for me plz!<br>";
	}

	if ($vehicle->doesFloat()) {
		echo "I'm waterproof 💦<br>";
	} else {
		echo "Water? Nope.<br>";
	}

	echo "<hr>";
	*/
}
