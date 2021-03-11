<?php

if (!function_exists('dump')) {
	function dump($var, $heading = null) {
		if ($heading) {
			echo "<h1>{$heading}</h1>";
		}

		echo "<pre>";
		var_dump($var);
		echo "</pre>";
	}
}
