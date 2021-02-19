<?php

require('includes/Car.php');

$cars = [];

$car = new Car("Tesla", "Model 3", 2020);
$car->setRegistrationNumber("WATT");
array_push($cars, $car);

$car = new Car("Nissan", "Qashqai", 2019);
$car->setRegistrationNumber("FUO102");
array_push($cars, $car);

$car = new Car("Porsche", "Taycan", 2021);
$car->setRegistrationNumber("GASLOL");
array_push($cars, $car);

foreach ($cars as $car) {
	echo "<p>{$car->getInfo()}</p>";
}
