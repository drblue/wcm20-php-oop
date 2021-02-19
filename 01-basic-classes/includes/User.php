<?php

class User {
	protected $name;
	protected $email;
	protected $role = 1;

	static protected $roles = [1 => 'user', 2 => 'administrator'];

	public function __construct(string $name, string $email) {
		$this->name = $name;
		$this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}

	public function getRole() {
		return $this->role;
	}
	public function getRoleName() {
		return self::$roles[$this->role];
	}
	public function setRole($role) {
		$this->role = $role;
	}
}
