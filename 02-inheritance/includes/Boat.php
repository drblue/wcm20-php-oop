<?php

class Boat extends MotorVehicle {
	public $type = "Boat";
	public $floats;
	public $wheels = false;

	public function __construct($manufacturer, $model, bool $floats = true) {
		parent::__construct($manufacturer, $model);

		$this->floats = $floats;
	}

	public function doesFloat() {
		return $this->floats;
	}

	public function getInfo() {
		// I am a (Formula) (430) (boat) that (floats|does not float) and I have (4|no wheels).
		return sprintf("I am a %s %s %s that %s and I have %s.",
			$this->manufacturer,
			$this->model,
			strtolower($this->type),
			$this->doesFloat() ? "floats" : "does not float 😱",
			$this->hasWheels() ? "{$this->wheels} wheels" : "no wheels"
		);
	}
}
