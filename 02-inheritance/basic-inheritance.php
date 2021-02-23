<?php

require_once('includes/helpers.php');

require_once('includes/VehicleList.php');
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

/*
$vehiclelist = new VehicleList();
$vehiclelist->addVehicle($myGenericVehicle);
$vehiclelist->addVehicle($myCar);
$vehiclelist->addVehicle($myBoat);
$vehiclelist->addVehicle($mySecondBoat);
$vehiclelist->addVehicle($titanic);
$vehiclelist->addVehicle($myBike);
*/

$vehicles = [
	$myGenericVehicle, // 0
	$myCar, // 1
	$myBoat, // 2
	$mySecondBoat, // 3
	false,
	$titanic, // 4
	$myBike // 5
];
dump($vehicles);

foreach ($vehicles as $index => $vehicle) {
	// if it looks like a vehicle and it quacks like a vehicle then it is a vehicle
	if (!$vehicle instanceof Vehicle) {
		continue;
	}

	echo ++$index . ": " . $vehicle->getInfo() . "<br>";

	if ($vehicle instanceof Boat && $vehicle->doesFloat()) {
		echo "I'm waterproof 💦<br>";
	} else {
		echo "Water? Nope.<br>";
	}

	echo "<hr />";

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


	echo "<hr>";
	*/
}
