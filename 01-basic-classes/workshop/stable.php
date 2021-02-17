<?php

require('includes/Horse.php');

echo "<h1>Stallet</h1>";

$pelle = new Horse();
$pelle->name = "Pelle";
$pelle->breed = "Ardenner";
$pelle->color = "rosa";
$pelle->height = 170;
$pelle->weight = 650;
$pelle->sex = "vallak";

echo "<p>" . $pelle->getInfo() . "</p>"; // $this === $pelle

$kalle = new Horse();
$kalle->name = "Kalle";
$kalle->breed = "C-ponny";
$kalle->color = "turkos";
$kalle->sex = "hingst";

echo "<p>" . $kalle->getInfo() . "</p>"; // $this === $kalle

$anonymous = new Horse();

echo "<p>" . $anonymous->getInfo() . "</p>"; // $this === $anonymous
