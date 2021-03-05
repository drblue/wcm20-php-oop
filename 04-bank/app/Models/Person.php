<?php

namespace App\Models;

class Person extends BaseModel {
	protected $firstname;
	protected $lastname;

	public function getFirstName() {
		return $this->firstname;
	}

	public function getFullName() {
		return "{$this->firstname} {$this->lastname}";
	}

	public function getLastName() {
		return $this->lastname;
	}
}
