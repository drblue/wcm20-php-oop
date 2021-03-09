<?php

spl_autoload_register(function($class) {
	// this code will be executed every time a request for a class that isn't yet loaded is made
	$parts = explode("\\", $class);
	$classname = array_pop($parts);

	$classpath = implode("/", $parts);

	switch ($classpath) {
		case "App/Controllers":
			require("app/Controllers/{$classname}.php");
			break;

		case "App/Models":
			require("app/Models/{$classname}.php");
			break;
	}
});
