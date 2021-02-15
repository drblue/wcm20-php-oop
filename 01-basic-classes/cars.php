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

// Klasser skrivs alltid i singular form och med UpperCamelCase / PascalCase
class Car {
	public $manufacturer = 'N/A';
	public $model = 'N/A';
	public $year = 'N/A';
	public $awd = false;
}

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

function getCarInfo($car) {
	if ($car->awd) {
		$awd = "has AWD";
	} else {
		$awd = "does not have AWD";
	}

	return "{$car->manufacturer} {$car->model} is of model year {$car->year} and {$awd}.<br>\n";
}

foreach ($cars as $car) {
	echo getCarInfo($car);
}
