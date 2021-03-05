<?php

namespace App\Models;

class Account extends BaseModel {
	protected $accountnumber;
	protected $balance;
	protected $person_id;

	public function getAccountNumber() {
		return $this->accountnumber;
	}

	public function getBalance() {
		return $this->balance;
	}

	public function getPersonId() {
		return $this->person_id;
	}
}
