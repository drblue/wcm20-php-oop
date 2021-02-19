<?php

// Klasser skrivs alltid med UpperCamelCase / PascalCase och i singular form
class Car {
	public $manufacturer;
	public $model;
	public $year;
	public $registrationNumber;

	public function __construct($manufacturer, $model, $year) {
		$this->setManufacturer($manufacturer);
		$this->setModel($model);
		$this->setYear($year);

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
		return $this->registrationNumber;
	}
	public function setRegistrationNumber($registrationNumber) {
		$this->registrationNumber = $registrationNumber;
	}

	/**
	 * data methods
	 */
	public function getInfo() {
		return "Jag är en {$this->getManufacturer()} {$this->getModel()} av årsmodell {$this->getYear()} med registreringsnummer {$this->getRegistrationNumber()}.";
	}
}
