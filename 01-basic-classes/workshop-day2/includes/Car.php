<?php

// Klasser skrivs alltid med UpperCamelCase / PascalCase och i singular form
class Car {
	public $manufacturer;
	public $model;
	public $year;
	public $registrationNumber;
	public $milage;

	public function __construct($manufacturer, $model, $year = 2021, $milage = 0) {
		$this->setManufacturer($manufacturer);
		$this->setModel($model);
		$this->setYear($year);
		$this->setMilage($milage);

		// profit 💰
	}

	/**
	 * getters and setters
	 */

	/* manufacturer */
	public function getManufacturer() {
		return $this->manufacturer;
	}
	public function setManufacturer($manufacturer) {
		$this->manufacturer = $manufacturer;
	}

	/* milage */
	public function getMilage() {
		return $this->milage;
	}
	public function setMilage($milage) {
		if (!is_numeric($milage) || $milage < 0) {
			return false;
		}

		$this->milage = $milage;
		return true;
	}

	/* model */
	public function getModel() {
		return $this->model;
	}
	public function setModel($model) {
		$this->model = $model;
	}

	/* year */
	public function getYear() {
		return $this->year;
	}
	public function setYear($year) {
		$this->year = $year;
	}

	/* registrationNumber */
	public function getRegistrationNumber() {
		if ($this->hasRegistrationNumber()) {
			return $this->registrationNumber;
		} else {
			return "(ej registrerad)";
		}
	}
	public function hasRegistrationNumber() {
		return (!empty($this->registrationNumber));
	}
	public function setRegistrationNumber($registrationNumber) {
		$this->registrationNumber = $registrationNumber;
	}

	/**
	 * data methods
	 */

	public function drive($distance) {
		if (is_int($distance) && $distance > 0) {
			$currentMilage = $this->getMilage();
			$newMilage = $currentMilage + $distance;
			$this->setMilage($newMilage);

			return true;
		}

		return false;
	}

	public function getInfo() {
		return "Jag är en {$this->getManufacturer()} {$this->getModel()} av årsmodell {$this->getYear()} med registreringsnummer {$this->getRegistrationNumber()} och mätarställning {$this->getMilage()} km.";
	}
}
