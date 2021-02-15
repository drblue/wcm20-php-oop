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

$car1 = new Car();
$car1->manufacturer = "Tesla";
echo "Manufacturer of car 1 is {$car1->manufacturer}.<br>\n";

$car2 = new Car();
echo "Manufacturer of car 2 is {$car2->manufacturer}.<br>\n";

echo "<pre>";

echo "Car 1:\n";
var_dump($car1);
echo "\n";

echo "Car 2:\n";
var_dump($car2);
echo "\n";

echo "</pre>";
