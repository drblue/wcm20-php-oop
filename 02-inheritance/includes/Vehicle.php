<?php

class Vehicle {
	public $type = 'Vehicle';
	public $manufacturer;
	public $model;
	public $wheels;
	public $floats = false;
	public $engine = true;

	public function __construct($manufacturer, $model) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
	}

	public function getManufacturer() {
		return $this->manufacturer;
	}

	public function getModel() {
		return $this->model;
	}

	public function doesFloat() {
		return $this->floats === true;
	}

	public function hasEngine() {
		return $this->engine === true;
	}

	public function hasWheels() {
		return $this->wheels && $this->wheels > 0;
	}

	public function getInfo() {
		return sprintf("I am a %s %s %s.", $this->manufacturer, $this->model, strtolower($this->type));
	}
}
