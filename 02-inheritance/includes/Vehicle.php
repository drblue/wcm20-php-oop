<?php

class Vehicle {
	public $type = 'vehicle';
	public $manufacturer;
	public $model;
	public $wheels;
	public $floats = false;
	public $engine = true;

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
}
