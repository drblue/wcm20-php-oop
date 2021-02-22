<?php

class Account {
	protected $accountNumber;
	protected $balance;
	protected $owner;
	protected $transactions = [];

	public function __construct(string $accountNumber, string $owner, float $balance = 0) {
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
		$this->owner = $owner;
	}

	public function deposit(float $amount) {
		$this->balance += $amount;
		array_push($this->transactions, $amount);
	}

	public function withdraw(float $amount) {
		$this->balance -= $amount;
		array_push($this->transactions, -$amount);
	}

	public function getAccountNumber() {
		return $this->accountNumber;
	}

	public function getCurrentBalance() {
		return $this->balance;
	}

	public function getOwner() {
		return $this->owner;
	}

	public function getTransactions() {
		return $this->transactions;
	}
}
