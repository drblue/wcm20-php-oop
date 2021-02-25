<?php

class Account {
	protected $id;
	protected $accountnumber;
	protected $balance;
	protected $person_id;

	public function getAccountNumber() {
		return $this->accountnumber;
	}

	public function getBalance() {
		return $this->balance;
	}

	public function getId() {
		return $this->id;
	}

	public function getPersonId() {
		return $this->person_id;
	}
}
