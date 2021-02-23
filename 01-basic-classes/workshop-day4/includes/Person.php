<?php

class Person {
	protected $firstName;
	protected $lastName;

	public function __construct(string $firstName, string $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function getFirstName() {
		return $this->firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}

	public function getFullName() {
		return "{$this->firstName} {$this->lastName}";
	}
}
