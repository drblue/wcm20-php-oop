<?php

require_once('Car.php');

class CarList {
	protected $cars = [];
	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function addCar(Car $car) {
		array_push($this->cars, $car);

		return true;
	}

	public function findCarByRegistrationNumber() {
	}

	public function getCars() {
		return $this->cars;
	}

	public function getName() {
		return $this->name;
	}
}
