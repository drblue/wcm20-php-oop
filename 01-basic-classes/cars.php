<?php

/**
 * Inom OOP finns följande
 *
 * Klasser = Classes
 * Egenskaper = Properties (attributes)
 * Metoder = Methods
 * Instanser = Instances
 * Objekt = Object
 */

require('includes/Car.php');

$cars = [];

$car1 = new Car();
$car1->manufacturer = "Tesla";
$car1->model = "Model 3";
$car1->year = 2020;
$car1->awd = true;
array_push($cars, $car1);

$car2 = new Car();
$car2->manufacturer = "Nissan";
$car2->model = "Qashqai";
$car2->year = 2019;
array_push($cars, $car2);

$car3 = new Car();
$car3->manufacturer = "Kia";
$car3->model = "Mia";
array_push($cars, $car3);

$car4 = [
	'manufacturer' => 'Batmobile',
	'model' => '3000',
];

array_push($cars, 42);
array_push($cars, $car4);

foreach ($cars as $car) {
	if (is_object($car)) {

		echo $car->getCarInfo();

	} else {

		echo "That is not a car(-ish).<br>\n";

	}
}
