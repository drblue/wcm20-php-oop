<?php

// Klasser skrivs alltid i singular form och med UpperCamelCase / PascalCase
class Car {
	public $manufacturer = 'N/A';
	public $model = 'N/A';
	public $year = 'N/A';
	public $awd = false;

	public function getCarInfo() {
		if ($this->awd) {
			$awd = "has AWD";
		} else {
			$awd = "does not have AWD";
		}

		return "{$this->manufacturer} {$this->model} is of model year {$this->year} and {$awd}.<br>\n";
	}
}
