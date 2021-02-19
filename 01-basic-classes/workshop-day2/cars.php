<?php

require('includes/Car.php');

$cars = [];

$car = new Car("Tesla", "Model 3", 2020, 1500);
$car->setRegistrationNumber("WATT");
array_push($cars, $car);

$car = new Car("Nissan", "Qashqai", 2019, 5400);
$car->setRegistrationNumber("FUO102");
array_push($cars, $car);

$car = new Car("Porsche", "Taycan");
// $car->setRegistrationNumber("GASLOL");
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
