<?php

class API {

	private static $instance;

	public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new API();
		}

		return self::$instance;
	}

	public function __construct() {
		// do expensive operation
		echo "🚨 Look, I am a new instance!\n";
	}

	public function get($url) {
		// retrieve url
	}

}
