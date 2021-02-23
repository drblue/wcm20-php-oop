<?php

require_once('Transaction.php');

class Account {
	protected $accountNumber;
	protected $balance;
	protected $transactions = [];

	public function __construct(string $accountNumber, float $balance = 0) {
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}

	public function deposit(float $amount, string $description, $date = null) {
		$this->balance += $amount;
		$transaction = new Transaction($amount, $description, $date);
		array_push($this->transactions, $transaction);
	}

	public function withdraw(float $amount, string $description, $date = null) {
		$this->balance -= $amount;
		$transaction = new Transaction(-$amount, $description, $date);
		array_push($this->transactions, $transaction);
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
