<?php

class VehicleList {
	protected $vehicles = [];

	public function addVehicle(Vehicle $vehicle) {
		array_push($this->vehicles, $vehicle);
	}

	public function getVehicles() {
		return $this->vehicles;
	}
}
