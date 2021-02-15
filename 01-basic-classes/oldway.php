<?php

$watt = [
	'manufacturer' => 'Tesla',
	'model' => 'Model 3',
	'year' => 2020,
	'awd' => true,
];

$fuo102 = [
	'manufacturer' => 'Nissan',
	'model' => 'Qashqai',
	'year' => 2019,
	'awd' => false,
];

$badass = [
	'manufacturer' => 'Kia',
	'model' => 'Mia',
];

$batmobile = [
	'awesome' => true,
];

function getCarInfo($car) {
	$manufacturer = $model = $year = 'N/A';

	if (isset($car['manufacturer'])) {
		$manufacturer = $car['manufacturer'];
	}
	if (isset($car['model'])) {
		$model = $car['model'];
	}
	if (isset($car['year'])) {
		$year = $car['year'];
	}

	return "{$manufacturer} {$model} is of model year {$year}.<br>\n";
}

echo getCarInfo($watt);
echo getCarInfo($fuo102);
echo getCarInfo($badass);
echo getCarInfo($batmobile);
