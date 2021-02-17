<?php

require('includes/Horse.php');

echo "<h1>Stallet</h1>";

$horses = [];

$horse = new Horse(); // Horse#1
$horse->name = "Pelle";
$horse->breed = "Ardenner";
$horse->color = "rosa";
$horse->height = 170;
$horse->weight = 650;
$horse->sex = "vallak";
$horse->setOwner("Kajsa");
array_push($horses, $horse);

$horse = new Horse(); // #2
$horse->name = "Kalle";
$horse->breed = "C-ponny";
$horse->color = "turkos";
$horse->sex = "hingst";
$horse->setOwner("Pluto");
array_push($horses, $horse);

$horse = new Horse(); // #3
array_push($horses, $horse);

foreach ($horses as $horse) {
	echo "<p>" . $horse->getInfo() . "</p>"; // $this === $horse
}

echo "<pre>";
var_dump($horses);
echo "</pre>";
