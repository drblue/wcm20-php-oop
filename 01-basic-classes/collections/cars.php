<?php

require_once('includes/Car.php');
require_once('includes/CarList.php');

$cars = new CarList("Mitt garage");

/*
function findCar($cars, $registrationNumber) {
	foreach ($cars as $car) {
		if ($car->getRegistrationNumber() === $registrationNumber) {
			return $car;
		}
	}

	return false;
}
*/

$car = new Car("Tesla", "Model 3", 2020, 1500);
$car->setRegistrationNumber("WATT");
$car->drive(120);
$car->drive(3);
$car->drive(21);
$car->drive(21);
$res = $cars->addCar($car);
if ($res) {
	echo "Lade till {$car->getRegistrationNumber()} i listan {$cars->getName()}.<br>";
} else {
	echo "Kunde inte lägga till {$car->getRegistrationNumber()} i listan {$cars->getName()}.<br>";
}

$car = new Car("Nissan", "Qashqai", 2019, 5400);
$car->setRegistrationNumber("FUO102");
$res = $cars->addCar($car);
if ($res) {
	echo "Lade till {$car->getRegistrationNumber()} i listan {$cars->getName()}.<br>";
} else {
	echo "Kunde inte lägga till {$car->getRegistrationNumber()} i listan {$cars->getName()}.<br>";
}

$car = new Car("Porsche", "Taycan", null, 500);
$car->setRegistrationNumber("GASLOL");
// $car->drive(50);
$res = $cars->addCar($car);
if ($res) {
	echo "Lade till {$car->getRegistrationNumber()} i listan {$cars->getName()}.<br>";
} else {
	echo "Kunde inte lägga till {$car->getRegistrationNumber()} i listan {$cars->getName()}.<br>";
}

/*
$cars->findCar('DIESEL');

$res = findCar($cars, "DIESEL");
echo "Result of finding car with registration number DIESEL: ";
echo "<pre>";
var_dump($res);
echo "</pre>";
*/

foreach ($cars->getCars() as $car) {
	echo "<p>";
	echo $car->getInfo() . " ";
	if ($car->hasRegistrationNumber()) {
		echo "🏎";
	} else {
		echo "👩🏻‍🏭";
	}
	echo "</p>";
}

echo "<pre>";
var_dump($cars);
echo "</pre>";
