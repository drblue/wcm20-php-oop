<?php

require('includes/Horse.php');

echo "<h1>Stallet</h1>";

$horses = [];

$horse = new Horse("Pelle", "Ardenner", "rosa", 170, 650, "valack"); // Horse#1, will execute Horse->__construct()
// $horse->setHeight(170);
// $horse->weight = 650;
// $horse->sex = "vallak";

$owner = "Kajsa";
if ($horse->addOwner($owner)) {
	echo "Successfully set '{$owner}' as owner to Pelle.<br>";
} else {
	echo "Refused to set '{$owner}' as owner to Pelle.<br>";
}

array_push($horses, $horse);

$horse = new Horse("Kalle", "C-ponny", "turkos"); // #2
$horse->sex = "hingst";
$horse->setHeight("smol");
$horse->addOwner("Pluto");
$horse->addOwner("Långben");
array_push($horses, $horse);

$horse = new Horse("🥝", "", "grön"); // #3
array_push($horses, $horse);

foreach ($horses as $horse) {
	echo "<p>" . $horse->getInfo() . "</p>"; // $this === $horse
}

echo "<pre>";
var_dump($horses);
echo "</pre>";
