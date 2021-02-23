<?php

function dump($var, $heading = null) {
	if ($heading) {
		echo "<h1>{$heading}</h1>";
	}

	echo "<pre>";
	var_dump($var);
	echo "</pre>";
}

function nbr_noun($nbr, $singular, $plural) {
	/*
	if ($nbr == 1) {
		return $singular;
	} else {
		return $plural;
	}
	*/

	// shorter version of above if-expression
	return ($nbr == 1) ? $singular : $plural;
}
