<?php

class Vehicle {
	public $type = 'Vehicle';
	public $manufacturer;
	public $model;
	public $wheels;

	public function __construct($manufacturer, $model) {
		echo "Vehicle::__construct() called<br>";
		$this->manufacturer = $manufacturer;
		$this->model = $model;
	}

	public function getManufacturer() {
		return $this->manufacturer;
	}

	public function getModel() {
		return $this->model;
	}

	public function hasWheels() {
		return $this->wheels && $this->wheels > 0;
	}

	public function getInfo() {
		return sprintf("I am a %s %s %s.", $this->manufacturer, $this->model, strtolower($this->type));
	}
}
