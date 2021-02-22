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

	public function getCarCount() {
		return count($this->cars);
	}

	public function getCars() {
		return $this->cars;
	}

	public function getName() {
		return $this->name;
	}

	public function removeCar(Car $car) {
		$index = array_search($car, $this->cars); // false
		if ($index === false) {
			return false;
		}

		array_splice($this->cars, $index, 1);
		return true;
	}
}
