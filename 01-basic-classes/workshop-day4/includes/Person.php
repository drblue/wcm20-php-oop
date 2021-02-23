<?php

require_once('Account.php');

class Person {
	protected $firstName;
	protected $lastName;
	protected $accounts = [];

	public function __construct(string $firstName, string $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function addAccount(Account $account) {
		array_push($this->accounts, $account);
	}

	public function getAccounts() {
		return $this->accounts;
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
