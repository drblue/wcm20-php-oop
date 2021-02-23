<?php

class MotorVehicle extends Vehicle {
	public $engine;

	public function __construct($manufacturer, $model, $engine = true) {
		parent::__construct($manufacturer, $model);

		echo "MotorVehicle::__construct() called<br>";

		$this->engine = $engine;
	}

	public function hasEngine() {
		return $this->engine === true;
	}
}
