<?php

$cars = [
	[ // 0
		'manufacturer' => 'Tesla',
		'model' => 'Model 3',
		'year' => 2020,
		'awd' => true,
	],
	[ // 1
		'manufacturer' => 'Nissan',
		'model' => 'Qashqai',
		'year' => 2019,
		'awd' => false,
	],
	[ // 2
		'manufacturer' => 'Kia',
		'model' => 'Mia',
	],
	false,
	42,
	[ // 3
		'awesome' => true,
	],
];

function getCarInfo($car) {
	$manufacturer = $model = $year = 'N/A';

	if (!is_array($car)) {
		return "Silly human.<br>";
	}

	if (!isset($car['manufacturer']) || !isset($car['model']) || !isset($car['manufacturer'])) {
		return "That aint no car to me.<br>";
	}

	if (isset($car['manufacturer'])) {
		$manufacturer = $car['manufacturer'];
	}
	if (isset($car['model'])) {
		$model = $car['model'];
	}
	if (isset($car['year'])) {
		$year = $car['year'];
	}
	if (isset($car['awd']) && $car['awd'] === true) {
		$awd = "has All wheel drive";
	} else {
		$awd = "does not have All wheel drive";
	}

	return "{$manufacturer} {$model} is of model year {$year} and ${awd}.<br>\n";
}

function getCarAge($car) {
	if (!isset($car['year'])) {
		return "Car has no model year.<br>\n";
	}

	$age = date("Y") - $car['year'];

	return "Car is {$age} year(s) old.<br>\n";
}

foreach ($cars as $car) {
	echo getCarInfo($car);
	echo getCarAge($car);
	echo "<br>\n";
}

// echo getCarInfo($watt);
// echo getCarInfo($fuo102);
// echo getCarInfo($badass);
// echo getCarInfo($batmobile);
