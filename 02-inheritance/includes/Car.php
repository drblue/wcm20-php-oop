<?php

class Car extends Vehicle {
	public $type = "Car";

	public function __construct($manufacturer, $model, $wheels) {
		// execute parent's constructor
		parent::__construct($manufacturer, $model);

		$this->wheels = $wheels;
	}
}
