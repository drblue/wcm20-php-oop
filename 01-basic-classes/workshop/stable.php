<?php

require('includes/Horse.php');

echo "<h1>Stallet</h1>";

$horses = [];

$horse = new Horse("Pelle", "Ardenner", "rosa"); // Horse#1, will execute Horse->__construct()
$horse->height = 170;
$horse->weight = 650;
$horse->sex = "vallak";
$horse->setOwner("Kajsa");
array_push($horses, $horse);

$horse = new Horse("Kalle", "C-ponny", "turkos"); // #2
$horse->sex = "hingst";
$horse->setOwner("Pluto");
array_push($horses, $horse);

$horse = new Horse("🥝", "", "grön"); // #3
array_push($horses, $horse);

foreach ($horses as $horse) {
	echo "<p>" . $horse->getInfo() . "</p>"; // $this === $horse
}

echo "<pre>";
var_dump($horses);
echo "</pre>";
