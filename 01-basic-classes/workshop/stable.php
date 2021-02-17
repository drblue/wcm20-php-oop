<?php

require('includes/Horse.php');

echo "<h1>Stallet</h1>";

$pelle = new Horse();
$pelle->name = "Pelle";
$pelle->breed = "Ardenner";
$pelle->color = "rosa";

echo "<p>{$pelle->name} är en {$pelle->color} {$pelle->breed}.</p>";

$kalle = new Horse();
$kalle->name = "Kalle";
$kalle->breed = "C-ponny";
$kalle->color = "turkos";

echo "<p>{$kalle->name} är en {$kalle->color} {$kalle->breed}.</p>";
