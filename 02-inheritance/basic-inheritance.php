<?php

require_once('includes/helpers.php');

require_once('includes/VehicleList.php');
require_once('includes/Vehicle.php');
require_once('includes/MotorVehicle.php');
require_once('includes/Bicycle.php');
require_once('includes/Boat.php');
require_once('includes/Car.php');

echo "Creating a Vehicle..<br>";
$myGenericVehicle = new Vehicle("Gen", "Eric");
echo "<br>";

echo "Creating a Car..<br>";
$myCar = new Car("Tesla", "Roadster 2020", 4);
$myCar->model = "Roadster 2020";
$myCar->wheels = 4;
echo "<br>";

echo "Creating a Boat..<br>";
$myBoat = new Boat("Bayliner", "VR5 Cuddy");
echo "<br>";
echo "Creating a Boat..<br>";
$mySecondBoat = new Boat("Formula", "430");
echo "<br>";
echo "Creating a Boat..<br>";
$titanic = new Boat("M/S", "Titanic");
$titanic->floats = false;
echo "<br>";

echo "Creating a Bicycle..<br>";
$myBike = new Bicycle("Yosemite", "City Bike");
echo "<br>";

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

	if ($vehicle instanceof MotorVehicle && $vehicle->hasEngine()) {
		echo "We're powered!<br>";
	} else {
		echo "No engine here, just human energy.<br>";
	}

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
