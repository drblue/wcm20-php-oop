<?php

require('includes/Car.php');

$cars = [];

$car = new Car("Tesla", "Model 3", 2020, 1500);
$car->setRegistrationNumber("WATT");
$car->drive(120);
$car->drive(3);
$car->drive(21);
$car->drive(21);
array_push($cars, $car);

$car = new Car("Nissan", "Qashqai", 2019, 5400);
$car->setRegistrationNumber("FUO102");
array_push($cars, $car);

$car = new Car(21, "Taycan", null, 500);
// $car->setRegistrationNumber("GASLOL");
// $car->drive(50);
array_push($cars, $car);

foreach ($cars as $car) {
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
