<?php

class Car extends MotorVehicle {
	public $type = "Car";

	public function __construct($manufacturer, $model, $wheels) {
		// execute parent's constructor
		parent::__construct($manufacturer, $model);

		echo "Car::__construct() called<br>";

		$this->wheels = $wheels;
	}
}
