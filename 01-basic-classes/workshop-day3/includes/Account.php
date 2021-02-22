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

	public function deposit(float $amount, string $description, $date = null) {
		if (!$date) {
			$date = date('Y-m-d');
		}

		$this->balance += $amount;
		array_push($this->transactions, ['date' => $date, 'description' => $description, 'amount' => $amount]);
	}

	public function withdraw(float $amount, string $description, $date = null) {
		if (!$date) {
			$date = date('Y-m-d');
		}

		$this->balance -= $amount;
		array_push($this->transactions, ['date' => $date, 'description' => $description, 'amount' => -$amount]);
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
