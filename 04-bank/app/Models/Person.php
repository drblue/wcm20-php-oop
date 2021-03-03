<?php

namespace App\Models;

class Person {
	protected $id;
	protected $firstname;
	protected $lastname;

	public function getFirstName() {
		return $this->firstname;
	}

	public function getFullName() {
		return "{$this->firstname} {$this->lastname}";
	}

	public function getId() {
		return $this->id;
	}

	public function getLastName() {
		return $this->lastname;
	}
}
