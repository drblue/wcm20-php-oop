<?php

require_once('Car.php');

class CarList {
	protected $cars = [];
	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function addCar(Car $car) {
		// bail if car with same registration number already exists in list
		if ($this->findCarByRegistrationNumber($car->getRegistrationNumber())) {
			return false;
		}

		array_push($this->cars, $car);

		return true;
	}

	public function findCarByRegistrationNumber(string $registrationNumber) {
		foreach ($this->cars as $car) {
			if ($car->getRegistrationNumber() === $registrationNumber) {
				return $car;
			}
		}

		return false;
	}

	public function getCars() {
		return $this->cars;
	}

	public function getName() {
		return $this->name;
	}
}
