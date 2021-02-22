<?php

require_once('includes/Vehicle.php');
require_once('includes/Bicycle.php');
require_once('includes/Boat.php');
require_once('includes/Car.php');

$myCar = new Car();
$myCar->manufacturer = "Tesla";
$myCar->model = "Roadster 2020";
$myCar->wheels = 4;

$myBoat = new Boat();
$myBoat->manufacturer = "Bayliner";
$myBoat->model = "VR5 Cuddy";

$mySecondBoat = new Boat();
$mySecondBoat->manufacturer = "Bayliner";
$mySecondBoat->model = "VR7 Cuddy";

$myBike = new Bicycle();
$myBike->manufacturer = "Biltema";
$myBike->model = "TooCheap";

$vehicles = [$myCar, $myBoat, $mySecondBoat, $myBike];

foreach ($vehicles as $vehicle) {
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
}
