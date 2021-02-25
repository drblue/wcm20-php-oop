<?php

class Teacher {
	protected $id;
	protected $firstname;
	protected $lastname;
	protected $email;

	public function getId() {
		return $this->id;
	}

	public function getFirstName() {
		return $this->firstname;
	}

	public function getLastName() {
		return $this->lastname;
	}

	public function getFullName() {
		return "{$this->firstname} {$this->lastname}";
	}

	public function getEmail() {
		return $this->email;
	}

	public function hasValidEmail() {
		return (!empty($this->email) && strpos($this->email, '@') !== false);
	}
}
